@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>LOAN BALANCE</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="members-tab" data-toggle="tab" href="#members" role="tab"
                            aria-controls="members" aria-selected="true">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="nonmembers-tab" data-toggle="tab" href="#nonmembers" role="tab"
                            aria-controls="nonmembers" aria-selected="false">Non-Members</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="registeraccountreceivable" role="tabpanel"
                        aria-labelledby="registeraccountreceivable-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">From:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div><br><br>
                                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">To:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- END card-->
    </div>
    @endsection
    @section('styles')@endsection
    @section('scripts')@endsection
