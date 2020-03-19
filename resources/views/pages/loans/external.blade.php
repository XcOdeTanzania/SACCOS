@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>External Loans</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="loanstaken-tab" data-toggle="tab" href="#loanstaken"
                            role="tab" aria-controls="loanstaken" aria-selected="true">LoansTaken</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="loansreturned-tab" data-toggle="tab" href="#loansreturned"
                            role="tab" aria-controls="loansreturned" aria-selected="false">LoansReturned</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="deposittheloan-tab" data-toggle="tab" href="#deposittheloan"
                            role="tab" aria-controls="deposittheloan" aria-selected="false">DepositTheLoan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="loanstaken" role="tabpanel"
                        aria-labelledby="loanstaken-tab">
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
                    <div class="tab-pane" id="loansreturned" role="tabpanel">
                        
                    <div class="card-header">
                            <div class="col">
                                <div class="row">
                                    <label for="user" class="col-form-label mr-2">From:</label>
                                    <div>
                                        <div class="input-group date AngleDate">
                                            <input id="from" class="form-control" type="date" />
                                            <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                    <label for="user" class="ml-4 col-form-label mr-2">To:</label>
                                    <div>
                                        <div class="input-group date AngleDate">
                                            <input id="to" class="form-control" type="date" />
                                            <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                    <div class="row from-control">
                                        <div class="col-2">
                                        <button class=" form-group btn btn-primary ml-3" type="submit">Search</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                 </div>
                </div>
                <div class="tab-pane" id="deposittheloan"  role="tabpanel">
                <form class="form-horizontal" method="get" action="">
                            <fieldset>

                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Amount Taken</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="number"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Lender</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="text"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Interest</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="number"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Date to restore:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">receipt</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="text"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">
                                       Bank/Cash</label>
                                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                                            <option>Select</option>
                                            <option>Bank</option>
                                            <option>Cash</option>
                                        </select></div>
                                </div><br>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">
                                        Account Name</label>
                                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                                            <option>Select</option>
                                            <option>45jkhhh</option>
                                            <option>we3344</option>
                                        </select></div>
                                        
                                </div><br>
                    <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Date of taking loan:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                    </div>
                    <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Start date for recovery:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div><br><br>
                    </div>
                                <div> <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a>
                                    <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                                </div>
                            </fieldset>
                        </form>
                </div>

                </div>
                </div> 
            </div>
        </div><!-- END card-->
    </div>
    @endsection
    @section('styles')@endsection
    @section('scripts')@endsection
