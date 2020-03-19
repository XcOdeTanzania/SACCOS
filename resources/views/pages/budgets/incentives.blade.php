@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Set The Incentives
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="bg-gray-lighter px-3 py-2 my-3">set</div>
                    <div class="card-body">
                    <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Budget</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>The necessary savings</option>
                            <option>Education</option>
                  </select></div>
                 </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Amount</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                        <div class="card-header">
                            <div class="col">
                                <div class="row">
                                    <label for="user" class="col-form-label mr-2">Month:</label>
                                    <div>
                                        <div class="input-group date AngleDate">
                                            <input id="from" class="form-control" type="date" />
                                            <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                    <label for="user" class="ml-4 col-form-label mr-2">Year:</label>
                                    <div>
                                        <div class="input-group date AngleDate">
                                            <input id="to" class="form-control" type="date" />
                                            <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                </div>
                    </fieldset>
                    <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Bank/Cash</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option></option>
                            <option>Bank</option>
                            <option>Cash</option>
                  </select></div>
                 </fieldset>
                 <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Account Name</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option></option>
                            <option>034JKT8</option>
                            <option>KH678F</option>
                  </select></div>
                 </fieldset>
                 <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Is the information start?</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                  </select></div>
                 </fieldset>
                  </div><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">cancel</button></a>
                 <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a></div>
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
