@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>Check cash for a specific period</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">


                <form class="form-horizontal" method="get" action="">
                    <fieldset>
                        <div class="card-header">
                            <div class="col">
                                <div class="row">
                                    <label for="user" class="col-form-label mr-2">From:</label>
                                    <div>
                                        <div class="input-group date AngleDate">
                                            <input id="from" class="form-control" type="date" />
                                            <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                    <label for="user" class="ml-4 col-form-label mr-2">To:</label>
                                    <div>
                                        <div class="input-group date AngleDate">
                                            <input id="to" class="form-control" type="date" />
                                            <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div><br><br><br>
                                    <div class="row from-control">
                                        <div class="col-2"></div>
                                        <button class="form-group btn btn-primary ml-3" type="submit">Check Transaction</button>
                                    </div>
                                    <div class="row from-control">
                                        <div class="col-2"></div>
                                        <button class="form-group btn btn-primary ml-3" type="submit">Check Deposit</button>
                                    </div>
                                </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection


