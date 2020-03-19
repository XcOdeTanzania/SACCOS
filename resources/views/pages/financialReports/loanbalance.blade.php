@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>LOAN BALANCE</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="Members-tab" data-toggle="tab" href="#Members" role="tab"
                            aria-controls="Members" aria-selected="true">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="Non-Members-tab" data-toggle="tab" href="#Non-Members" role="tab"
                            aria-controls="Non-Members-" aria-selected="false">Non-Members</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Members" role="tabpanel" aria-labelledby="Members-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="card-header">
                                    <div class="col">
                                        <div class="row">
                                            <label for="user" class="col-form-label mr-2">Up To:</label>
                                            <div>
                                                <div class="input-group date AngleDate">
                                                    <input id="from" class="form-control" type="text" />
                                                    <span class="input-group-append input-group-addon">
                                                        <span class="input-group-text fas fa-calendar-alt"></span>
                                                </div>
                                            </div>
                                            <div class="row from-control">
                                                <div class="col-2"></div>
                                                <button class=" form-group btn btn-primary ml-3  "
                                                    type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane" id="Non-Members" role="tabpanel"><form class="form-horizontal" method="get" action="">
                        <fieldset>
                            <div class="card-header">
                                <div class="col">
                                    <div class="row">
                                        <label for="user" class="col-form-label mr-2">Up To:</label>
                                        <div>
                                            <div class="input-group date AngleDate">
                                                <input id="from" class="form-control" type="text" />
                                                <span class="input-group-append input-group-addon">
                                                    <span class="input-group-text fas fa-calendar-alt"></span>
                                            </div>
                                        </div>
                                        <div class="row from-control">
                                            <div class="col-2"></div>
                                            <button class=" form-group btn btn-primary ml-3  " type="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                </div><!-- END card-->

            </div>
            <!-- END card-->
        </div>
        @endsection
        @section('styles')@endsection
        @section('scripts')@endsection
