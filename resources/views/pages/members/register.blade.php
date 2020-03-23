@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Add a Member
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">First Name</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Middle Name</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Last Name</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                        <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Date of birth</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                           </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Gender</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                  </select></div>
                 </fieldset>
                 <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Is it Group?</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                  </select></div>
                 </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Group Name</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Member?</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                  </select></div>
                 </fieldset>
                 <fieldset>
                        <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Date of joining</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                           </div>
                        </fieldset>
                 <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Phone Number</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-6"><input class="form-control" type="email"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Membership Number</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Loan</label>
                                <div class="col-md-6"><input class="form-control" type="number">
                            </div>
                 </fieldset>
                 <div><a href="#"> <button class="btn btn-primary" type="submit">Save</button></a> 
                 <a href="#"> <button class="btn btn-primary" type="submit">Cancel</button></a> 
                </div>
                 </form>  
                 </div><!-- END card-->
        </div>
    
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/validation.js') }}"></script>
@endsection


