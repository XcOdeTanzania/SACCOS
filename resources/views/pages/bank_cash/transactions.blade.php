@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>Check cash for a specific period</h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Transactions held on the date:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">To:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div>

                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Cashier</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                             <option>All</option>
                            <option>Khalid Juma</option>
                            <option>Noela Richard</option>
                            <option>Hawaa</option>

                        </select></div>
                </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Check transaction</button></a>
                    <a href="#"> <button class="btn btn-primary" type="submit">Check the reminder</button></a>
                </div>
            </fieldset>
        </form>
    </div><!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
