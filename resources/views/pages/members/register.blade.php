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
                <div><button href="#addmember" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
                        class="fa mr-2 fas fa-plus"></em>Add</button> 
                 <a href="#"> <button class="btn btn-primary" type="submit">Cancel</button></a> 
                </div>
                 </fieldset>
                 </form>  
                 </div><!-- END card-->
        </div>
    
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/validation.js') }}"></script>
@endsection

<!-- Add Modal HTML -->
<div id="addmember" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Member</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label> Add Member</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Add">
                                <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
