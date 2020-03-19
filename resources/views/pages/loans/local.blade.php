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
                        <a class="nav-link active" id="loansoffered-tab" data-toggle="tab" href="#loansoffered"
                            role="tab" aria-controls="loansoffered" aria-selected="true">LoansOffered</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="loansreturned-tab" data-toggle="tab" href="#loansreturned"
                            role="tab" aria-controls="loansreturned" aria-selected="false">LoansReturned</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="expectedrestoration-tab" data-toggle="tab" href="#expectedrestoration"
                            role="tab" aria-controls="expectedrestoration" aria-selected="false">ExpectedRestoration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="creditremaining-tab" data-toggle="tab" href="#creditremaining"
                            role="tab" aria-controls="creditremaining" aria-selected="false">CreditRemaining</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " id="delayedloans-tab" data-toggle="tab" href="#delayedloans"
                            role="tab" aria-controls="delayedloans" aria-selected="false">DelayedLoans</a>
                       </li>
                       <li class="nav-item">
                        <a class="nav-link " id="creditage-tab" data-toggle="tab" href="#creditage"
                            role="tab" aria-controls="creditage" aria-selected="false">CreditAge</a>
</li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="loansoffered" role="tabpanel"
                        aria-labelledby="loansoffered-tab">
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
                                        <div class="col-2"></div>
                                        <button class=" form-group btn btn-primary ml-3" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="expectedrestoration" role="tabpanel">
                    <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Date:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                    <div class="row from-control">
                                        <div class="col-2"></div>
                                        <button class=" form-group btn btn-primary ml-3" type="submit">Search</button>
                                    </div>
                                </div>
                    </div>
                        <div class="tab-pane" id="creditremaining" role="tabpanel">
                            <div class="card-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr class="bg-gray">
                                                <th></th>

                                                <th>Name</th>
                                                <th>Gender </th>
                                                <th>Registration Number</th>
                                                <th>Loan type</th>
                                                <th>Borrowed</th>
                                                <th>Loan remained</th>
                                                <th>Interest remained</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mathias Mhando</td>
                                                <td>Male</td>
                                                <td>12</td>
                                                <td>Business loan</td>
                                                <td>450000</td>
                                                <td>6700000</td>
                                                <td>66000</td>
                                                </tr>
                                                <thead>
                                            <tr class="bg-black">
                                                <th></th>

                                                <th>Total</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>450000</th>
                                                <th>6700000 </th>
                                                <th>66000</th>

                                            </tr>
                                        </thead>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="row from-control">
                                        <button class=" form-group btn btn-primary ml-3" type="submit">Add</button>
                                    </div>
                            </div>                     
                        </div>
                        <div class="tab-pane" id="delayedloans" role="tabpanel">
                    <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Date:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                    <div class="row from-control">
                                        <div class="col-2"></div>
                                        <button class=" form-group btn btn-primary ml-3" type="submit">Search</button>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane" id="creditage" role="tabpanel">
                    <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Date:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                    <div class="row from-control">
                                        <div class="col-2"></div>
                                        <button class=" form-group btn btn-primary ml-3" type="submit">Search</button>
                                    </div>
                                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div><!-- END card-->
    </div>
    @endsection
    @section('styles')@endsection
    @section('scripts')@endsection
