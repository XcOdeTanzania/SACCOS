@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Deposit The Approved Loans
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="bg-gray-lighter px-3 py-2 my-3">deposit</div>
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Amount</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Monthly refund</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Member Name</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Gender</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Female</option>
                            <option>Male</option>
                  </select></div>
                 </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Member Number</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">loan type</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Business loan</option>
                            <option>Education loan</option>
                  </select></div>
                 </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Interest</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                                <label class="col-md-2 col-form-label">Loan Number</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                 <fieldset>
                 <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Time to resore:month</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>
                        <div class="form-group row mb-2"><label
                                        class="col-md-2 col-form-label mb-2">Date of Approved:</label>
                                    <div class="col-xl-6 col-10">
                                        <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                                type="date"><span class="input-group-append input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>
                                <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Sponsor Name</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Sponsor PhoneNumber</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">The purpose of the loan</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>     
                <div> <a href="#"> <button class="btn btn-primary" type="submit">save</button></a></div>
                 </fieldset>   
                <!-- END card-->
            </form>
        </div>
    </div>
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/validation.js') }}"></script>
@endsection
