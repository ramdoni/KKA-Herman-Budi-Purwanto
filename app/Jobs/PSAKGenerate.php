<?php

namespace App\Jobs;

use App\Events\MyEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Psak;
use App\Models\EmployeePensiun;
use App\Models\Benefit;
use App\Models\PsakUpload;

class PSAKGenerate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data,$usia_pensiun;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id,$usia_pensiun)
    {
        $this->data = PsakUpload::find($id);
        $this->usia_pensiun = $usia_pensiun;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $psak = Psak::with('employee')->where('psak_upload_id',$this->data->id)->get();
        foreach($psak as $k => $item){
            if(!isset($item->employee->name)) continue;

            echo "{$k}. Name : {$item->employee->name}\n";

            $employee = $item->employee;
            $saldo_dplk = 0;
            /**
             * tanggal masuk - tanggal lahir
             * = tahun
             */
            $age_entry = format_decimal(calculate_year_decimal($employee->date_of_birth,$employee->date_of_entry));
            echo "     Age : {$age_entry}\n";

            /**
             * tanggal valuasi - tanggal lahir
             * = tahun
             */
            $age_valuation = format_decimal(calculate_year_decimal($employee->date_of_birth,date('Y-m-d',strtotime($this->data->created_at))));
            $past_years_of_service = 0;
            echo "     Age Valuation : {$age_valuation}\n";

            /**
             * tanggal lahir + usia pensiun
             * = tanggal
             */
            $tanggal_pensiun = date('Y-m-d',strtotime($employee->date_of_birth ." +{$this->usia_pensiun} year"));
            echo "     Tanggal Pensiun : {$tanggal_pensiun}\n\n";
            /**
             * =IF(OR(D11>=D2;D12>=D2);
             *  ROUND((D1-D7)/365,25;2);
             *  MAX(0;IF(D10<D1;
             *  ROUND((D10-D7)/365,25;2);
             *  ROUND((D1-D7)/365,25;2))))
             */
            if($age_entry>=$this->usia_pensiun || $age_entry>=$this->usia_pensiun)
                $past_years_of_service = format_decimal(calculate_year_decimal($employee->date_of_entry,date('Y-m-d',strtotime($this->data->created_at))));
            elseif($tanggal_pensiun<$this->data->created_at)
                $past_years_of_service = format_decimal(calculate_year_decimal($employee->date_of_entry,$tanggal_pensiun));
            else
                $past_years_of_service = format_decimal(calculate_year_decimal($employee->date_of_entry,$this->data->created_at));

            $future_years_of_service = format_decimal(calculate_year_decimal($this->data->created_at,$tanggal_pensiun));;
            $total_years_of_service = format_decimal($past_years_of_service+$future_years_of_service);

            for($tahun=1;$tahun<$future_years_of_service;$tahun++){
                $pensiun_age_entry = format_decimal(calculate_year_decimal($employee->date_of_birth,$employee->date_of_entry));
                $date_pensiun = date('Y-m-d',strtotime($this->data->created_at ." +{$tahun} Year"));

                $pensiun = EmployeePensiun::where(['employee_id'=>$employee->id,'tahun_ke'=>$tahun])->first();
                if(!$pensiun) $pensiun = new EmployeePensiun();

                $pensiun->tahun_ke = $tahun;
                $pensiun->usia = format_decimal(calculate_year_decimal($employee->date_of_birth,$date_pensiun));;

                if($pensiun_age_entry>=$this->usia_pensiun || $pensiun_age_entry>=$this->usia_pensiun)
                    $pensiun->masa_kerja = format_decimal(calculate_year_decimal($employee->date_of_entry,$date_pensiun));
                elseif($tanggal_pensiun<$date_pensiun)
                    $pensiun->masa_kerja = format_decimal(calculate_year_decimal($employee->date_of_entry,$tanggal_pensiun));
                else
                    $pensiun->masa_kerja = format_decimal(calculate_year_decimal($employee->date_of_entry,$date_pensiun));

                $pensiun->gaji = 0;
                $pensiun->pesangon = 0;
                $pensiun->penghargaan_masa_kerja = 0;
                $pensiun->uang_pisah = 0;
                $pensiun->employee_id = $employee->id;
                $pensiun->save();
            }

            /**
             * Retirement Benefit
             * =IF(
             *      OR(D11>=D2;D11>=D2);
             *          (1,75*VLOOKUP(D15;Benefit!A2:D52;2)+1*VLOOKUP(D15;Benefit!$A$2:$D$52;3))*D8;
             * IF(D9>N82;0;N82-D9))
             *
             *
             */
            $total_pv_benefit_obligation = 0;
            $pv_benefit_obligation = 0;
            if($age_entry>=$this->usia_pensiun){
                $benefit = Benefit::where('mk',round($total_years_of_service))->first();
                $pv_benefit_obligation = (1.75 * $benefit->pesangon + 1*$benefit->upmk) * $item->wage;
            }else{
                if($saldo_dplk>$total_pv_benefit_obligation)
                    $pv_benefit_obligation = 0;
                else
                    $pv_benefit_obligation = $total_pv_benefit_obligation-$saldo_dplk;
            }

            /**
             * Current Service Cost (CSC)
             *  =IF(D12>=D2;
             *          IF(D15=0;0;
             *              IF(D13<1;
             *                      N83;
             *                  N83/D15)
             *          );
             *          IF(D13<1;
             *              N83;N83/D13)
             *  )
             * - if masa evaluasi >= usia pensiun
             *   - if total masa kerja =0
             *       return 0
             *   - else
             *      - if masa kerja <1
             *             return total PV Benefit Obligation
             *      - else
             *          return total PV Benefit Obligation / gaji atau upah
             *      -endif
             *   - endif
             * - else
             *   - if(masa kerja<1)
             *          return total PV Benefit Obligation
             *   - else
             *          return total PV Benefit Obligation / masa kerja lalu
             *   - endif
             * - endif
             *
             *
             */
            $csc_retirement_benefit = 0;
            if($age_valuation>=$this->usia_pensiun){
                if($total_years_of_service==0)
                    $csc_retirement_benefit = 0;
                else{
                    if($past_years_of_service<1)
                        $csc_retirement_benefit=$pv_benefit_obligation;
                    else
                        $csc_retirement_benefit=$pv_benefit_obligation/$total_years_of_service;
                }
            }else{
                if($past_years_of_service<1)
                    $csc_retirement_benefit=$pv_benefit_obligation;
                else
                    $csc_retirement_benefit=$pv_benefit_obligation/$total_years_of_service;
            }

            $csc_early_retirement_benefit = 0;

            $item->tanggal_pensiun = $tanggal_pensiun;
            $item->age_entry = $age_entry;
            $item->age_valuation = $age_valuation;
            $item->past_years_of_service = $past_years_of_service;
            $item->future_years_of_service = $future_years_of_service;
            $item->total_years_of_service = $total_years_of_service;
            $item->csc_retirement_benefit = $csc_retirement_benefit;
            $item->csc_total_scs_pertahun = $csc_retirement_benefit+$csc_early_retirement_benefit;
            $item->csc_total_scs_per6bulan = 0;
            $item->save();
        }

        event(new MyEvent('PSAK 24'));
    }
}
