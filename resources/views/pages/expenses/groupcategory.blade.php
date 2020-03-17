@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2> GROUP CATEGORY</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="Category-tab" data-toggle="tab" href="#Category" role="tab"
                            aria-controls="Category" aria-selected="true">Add Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="viewaccountpayable-tab" data-toggle="tab" href="#viewaccountpayable"
                            role="tab" aria-controls="viewaccountpayable" aria-selected="false">Expenses Category</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="registeraccountreceivable" role="tabpanel"
                        aria-labelledby="registeraccountreceivable-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">
                                        Expenses Category</label>
                                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                                            <option>Select</option>
                                            <option></option>
                                            <option></option>

                                        </select></div>
                                </div><br><br>
                                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">
                                         Accounting Code
                                    </label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="text"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div><br><br>
                                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">
                                        Type
                                    </label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                                class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div><br><br>
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
