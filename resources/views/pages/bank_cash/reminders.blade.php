@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>Record the balance with the bank for the year</h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">The expiry date:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">The reminders left</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>

                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Select Account</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>TRANC SACCOS LTD</option>
                            <option>01J266AT1</option>
                            <option>9277Q8j</option>

                        </select></div>
                </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Save</button></a>
                    <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                </div>
            </fieldset>
        </form>
    </div><!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
