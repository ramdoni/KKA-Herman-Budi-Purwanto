<?php

namespace App\Http\Livewire\Psak;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Company;
use App\Models\Psak;
use App\Models\PsakUpload;
use App\Models\Employee;

class Upload extends Component
{
    use WithFileUploads;
    public $file;
    public function render()
    {
        return view('livewire.psak.upload');
    }

    public function save()
    {
        $this->validate([
            'file'=>'required|mimes:xlsx|max:51200' // 50MB maksimal
        ]);
        $path = $this->file->getRealPath();
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setReadDataOnly(true);
        $data = $reader->load($path);
        $sheetData = $data->getActiveSheet()->toArray();
        if(count($sheetData) > 0){
            $company = Company::where('name',$sheetData[0][2])->first();
            if(!$company){
                $company = new Company();
                $company->name = $sheetData[0][2];
                $company->usia_pensiun = $sheetData[2][2];
                $company->save();
            }

            $psak_upload = new PsakUpload();
            $psak_upload->company_id = $company->id;
            $psak_upload->salary_increace = $sheetData[1][2];
            $psak_upload->tingkat_bunga = $sheetData[3][2];
            $psak_upload->kenaikan_gaji = $sheetData[4][2];
            $psak_upload->save();

            $jumlah_karyawan = 0;
            foreach($sheetData as $key => $i){
                if($key<9) continue; // skip header
                foreach($i as $k=>$a){ $i[$k] = trim($a); }
                $nomor_induk = $i[1];
                $name = $i[2];
                $sex = $i[3];
                $date_of_birth = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($i[4])->format('Y-m-d');
                $date_of_entry = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($i[5])->format('Y-m-d');
                $wages = $i[6];
                
                // $employee = Employee::where(['company_id'=>$company->id,'nomor_induk'=>$nomor_induk])->first();
                // if(!$employee){
                    $employee = new Employee();
                    $employee->company_id = $company->id;
                    $employee->name = $name;
                    $employee->nomor_induk = $nomor_induk;
                    $employee->sex = $sex;
                    if(checkdate_($date_of_birth)) $employee->date_of_birth = $date_of_birth;
                    if(checkdate_($date_of_entry)) $employee->date_of_entry = $date_of_entry;
                    $employee->wages = $wages;
                    $employee->psak_upload_id = $psak_upload->id;
                    $employee->save();
                // }
                
                $data = new Psak();
                $data->psak_upload_id = $psak_upload->id;
                $data->company_id = $company->id;
                $data->employee_id = $employee->id;
                $data->wage = $wages;
                $data->save();
                $jumlah_karyawan++;
            }
            $psak_upload->jumlah_karyawan = $jumlah_karyawan;
            $psak_upload->save();

            return redirect()->route('home')->with('message-success','Upload berhasil');
        }
    }
}
