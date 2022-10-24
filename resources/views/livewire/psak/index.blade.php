@section('title',"PSAK 24")
<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover m-b-0 c_list">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Company</th>
                                    <th>Tanggal Valuasi</th>
                                    <th>Salary Increase</th>
                                    <th>Jumlah Karyawan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k => $item)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{isset($item->company->name) ? $item->company->name : '-'}}</td>
                                    <td><a href="{{route('psak.detail',['data'=>$item->id])}}">{{$item->created_at}}</a></td>
                                    <td>{{$item->salary_increace}}%</td>
                                    <td>{{$item->jumlah_karyawan}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
