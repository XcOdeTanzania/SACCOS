@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>List of All External Debtors</h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">From the date:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                
            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">To:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">check</button></a></div>
            </fieldset>
        </form>
    </div><!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
