@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>PROVISION & ACCRUAL</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="registeraccountreceivable-tab" data-toggle="tab" href="#registeraccountreceivable" role="tab"
                            aria-controls="registeraccountreceivable" aria-selected="true">Register Account Receivable</a>
                    </li>
                   <li class="nav-item">
                    <a class="nav-link " id="viewaccountreceivable-tab" data-toggle="tab" href="#viewaccountreceivable" role="tab"
                        aria-controls="viewaccountreceivable" aria-selected="false">View Account Receivable</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" id="receiveacrualincome-tab" data-toggle="tab" href="#receiveacrualincome"
                            role="tab" aria-controls="receiveacrualincome" aria-selected="false">Receive Accrual Income </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="viewacrualincome-tab" data-toggle="tab" href="#viewacrualincome" role="tab" aria-controls="viewacrualincome"
                            aria-selected="false">View Accrual Income </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="registeraccountreceivable" role="tabpanel" aria-labelledby="registeraccountreceivable-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                               <fieldset>
                                    <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Account Code:</label>
                                        <div class="col-xl-6 col-10">
                                            <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                                    class="input-group-append input-group-addon"></span></div>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Account Name:</label>
                                        <div class="col-xl-6 col-10">
                                            <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                                    class="input-group-append input-group-addon"></span></div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div> <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                                        <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a>
                                    </div>
                                </fieldset>
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
