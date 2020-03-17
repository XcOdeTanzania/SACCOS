@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Amount</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Accrual Acc. Record</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option></option>
                            <option></option>
                        </select></div>
                </div><br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Bank or Cash</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option></option>
                            <option></option>
                        </select></div>
                </div><br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Account No</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option></option>
                            <option></option>
                        </select></div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Payment Date</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Cheque No</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                 <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a>
                </div>
            </fieldset>
        </form>
    </div><!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
