@section('title',"{$data->employee->nomor_induk} - {$data->employee->name}")
<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <table class="table table_custome">
                                <thead>
                                    <tr>
                                        <th>Tanggal Valuasi</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Usia Pensiun</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Induk</th>
                                        <td>{{$employee->nomor_induk}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{$employee->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$employee->sex}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{date('d-M-Y',strtotime($employee->date_of_birth))}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Masuk</th>
                                        <td>{{date('d-M-Y',strtotime($employee->date_of_entry))}}</td>
                                    </tr>
                                    <tr>
                                        <th>Gaji/Upah</th>
                                        <td>{{format_idr($data->wage)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Saldo DPLK</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pensiun</th>
                                        <td>{{date('d-M-Y',strtotime($data->tanggal_pensiun))}}</td>
                                    </tr>
                                    <tr>
                                        <th>Usia Masuk (UM)</th>
                                        <td>{{$data->age_entry}}</td>
                                    </tr>
                                    <tr>
                                        <th>Usia Valuasi (UV)</th>
                                        <td>{{$data->age_valuation}}</td>
                                    </tr>
                                    <tr>
                                        <th>Masa Kerja Lalu (MKL)</th>
                                        <td>{{$data->past_years_of_service}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sisa Masa Kerja (MKAD)</th>
                                        <td>{{$data->future_years_of_service}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Masa Kerja (TMK)</th>
                                        <td>{{$data->total_years_of_service}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-md-3 ml-4">
                            <h6>Current Service Cost (CSC)</h6>
                            <table class="table table_custome mt-1">
                                <thead>
                                    <tr>
                                        <th colspan="2">Retirement Benefit</th>
                                        <td>{{format_idr($data->csc_retirement_benefit)}}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Early Retirement Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Death Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Disability Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Resign Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">Total CSC</th>
                                        <th>Per Tahun</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Per 6 Bulan</th>
                                        <td></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-md-4 ml-4">
                            <h6>Present Value Benefit Obligations (PVBO)</h6>
                            <table class="table table_custome mt-1">
                                <thead>
                                    <tr>
                                        <th>Retirement Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Early Retirement Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Death Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Disability Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Resign Benefit</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Total PVBO</th>
                                        <td></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <hr />
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-pensiun" aria-controls="home" role="tab" aria-selected="true">Pensiun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-retirement-benefit" aria-controls="home" role="tab" aria-selected="true">Retirement Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-death-benefit" aria-controls="home" role="tab" aria-selected="true">Death Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-disability-benefit" aria-controls="home" role="tab" aria-selected="true">Disability Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-resign-benefit" aria-controls="home" role="tab" aria-selected="true">Resign Benefit</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-home" aria-labelledby="rincian-tab" role="tabpanel">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tahun Ke</th>
                                        <th>Usia</th>
                                        <th>Masa Kerja</th>
                                        <th>Proyeksi Gaji</th>
                                        <th>Pesangon</th>
                                        <th>Penghargaan Masa Kerja</th>
                                        <th>Uang Pisah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($employee->employee_pensiun))
                                        @foreach($employee->employee_pensiun as $k => $item)
                                            <tr>
                                                <td>{{$item->tahun_ke}}</td>
                                                <td>{{$item->usia}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-retirement-benefit" aria-labelledby="rincian-tab" role="tabpanel">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Probability of Life</th>
                                        <th>Discount Factor</th>
                                        <th>PV Future Benefit</th>
                                        <th>Current Service Cost</th>
                                        <th>PV Benefit Obligation</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-death-benefit" aria-labelledby="rincian-tab" role="tabpanel">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mortality Rates</th>
                                        <th>Discount Factor</th>
                                        <th>PV Future Benefit</th>
                                        <th>Current Service Cost</th>
                                        <th>PV Benefit Obligation</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-disability-benefit" aria-labelledby="rincian-tab" role="tabpanel">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Disability Rates</th>
                                        <th>Discount Factor</th>
                                        <th>PV Future Benefit</th>
                                        <th>Current Service Cost</th>
                                        <th>PV Benefit Obligation</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-resign-benefit" aria-labelledby="rincian-tab" role="tabpanel">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Resign Rates</th>
                                        <th>Discount Factor</th>
                                        <th>PV Future Benefit</th>
                                        <th>Current Service Cost</th>
                                        <th>PV Benefit Obligation</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
