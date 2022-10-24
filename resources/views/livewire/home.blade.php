
@section('title', 'Report')
@section('parentPageTitle', 'Dashboard')
<div class="clearfix row">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#psak">PSAK 21</a></li>
                    <li >
                        <button class="btn btn-info ml-3" href="javascript:void(0)" data-toggle="modal" data-target="#modal_upload"><i class="fa fa-upload"></i> <span class="align-middle">Upload</span></button>
                    </li>
                </ul>
                <div class="px-0 tab-content">
                    <div class="tab-pane show active" id="payable">
                        <livewire:psak.index />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('psak.upload')
</div>
