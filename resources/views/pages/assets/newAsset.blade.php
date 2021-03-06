@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="content-heading">
        <div>
            Add New Asset
        </div>
    </div>
    <div class =card card-default >
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Asset Name:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>  
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Category:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>1</option>
                            <option>2</option>

                        </select></div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Amount:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div>
                <br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Receipt:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div>
                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Bank&Cash:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option></option>
                            <option></option>

                        </select></div>
                </div><br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Account Name:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option></option>
                            <option></option>
                        </select></div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Increase/Depreciation:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="text"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div>
                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Depreciation:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select></div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Date:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">New/Old:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>New</option>
                            <option>Old</option>
                        </select></div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Description:</label>
                    <div class="col-xl-6 col-10">
                        <div> <textarea id="description" rows="4" cols="68"></textarea></div>
                    </div>
                </div>
                <br><br>
                <div> <a href="#"> <button class="btn btn-primary ml-2" type="submit">Add</button></a>
                    <a href="#"> <button class="btn btn-primary ml-2" type="submit">Delete</button></a>
                </div>
            </fieldset>
        </form>
    </div>
    </div>
    <!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
