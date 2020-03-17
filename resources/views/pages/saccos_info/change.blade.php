@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Edit Saccos Information
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="bg-gray-lighter px-3 py-2 my-3">Edit</div>
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Saccos Name</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Registration Number</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Value of Stock</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Value of the Entry</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Penalty of delay %</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Address</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Phone Number</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset class="m-0">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Choose File</label>
                                <div class="col-md-3"><input class="form-control filestyle" type="file"
                                data-classbutton="btn btn-secondary" data-classinput="form-control inline"
                                data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
                            </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Deposits as Collateral</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                  </select></div>
                 </fieldset>
                 <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Loans how often Savings</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Allow system to increase penalties</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                  </select></div>
                  </div><br><br>
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
