@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>Local Loans</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="specialimprest-tab" data-toggle="tab" href="#loans offered"
                            role="tab" aria-controls="specialimprest" aria-selected="true">Loans Offered</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="viewimprestrecord-tab" data-toggle="tab" href="#loans returned"
                            role="tab" aria-controls="viewimprestrecord" aria-selected="false">Loans Returned</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="viewimprestbalance-tab" data-toggle="tab" href="#expected restoration"
                            role="tab" aria-controls="viewimprestbalance" aria-selected="false">Expected Restoration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="viewimprestbalance-tab" data-toggle="tab" href="#credit remaining"
                            role="tab" aria-controls="viewimprestbalance" aria-selected="false">Credit Remaining</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " id="viewimprestbalance-tab" data-toggle="tab" href="#delayed loans"
                            role="tab" aria-controls="viewimprestbalance" aria-selected="false">Delayed Loans</a>
                       </li>
                       <li class="nav-item">
                        <a class="nav-link " id="viewimprestbalance-tab" data-toggle="tab" href="#credit age"
                            role="tab" aria-controls="viewimprestbalance" aria-selected="false">Credit Age</a>
</li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="registeraccountreceivable" role="tabpanel"
                        aria-labelledby="registeraccountreceivable-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>

                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Group Name</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="text"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div><br><br>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">
                                       Loan type</label>
                                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                                            <option>Select</option>
                                            <option>Business loan</option>
                                            <option>Group loan</option>
                                        </select></div>
                                </div><br><br>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Amount</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="text"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">From:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">To:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>


                                <div> <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a>
                                    <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                                </div>
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
