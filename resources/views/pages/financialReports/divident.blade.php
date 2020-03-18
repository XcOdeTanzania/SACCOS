@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        PREPARE DIVIDENT
    </div>
</div>
<!-- START row-->
<div class="row">
    <div class="col-xl-12">
        <!-- START card-->
        <div class="card card-default">
            <div class="card-header">
                <div class="col">
                    <div class="row">
                        <label for="user" class="col-form-label mr-2">From:</label>
                        <div>
                            <div class="input-group date AngleDate">
                                <input id="from" class="form-control" type="text" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text fas fa-calendar-alt"></span></span>
                            </div>
                        </div>
                        <label for="user" class="ml-4 col-form-label mr-2">To:</label>
                        <div>
                            <div class="input-group date AngleDate">
                                <input id="to" class="form-control" type="text" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text fas fa-calendar-alt"></span></span>
                            </div>
                        </div>

                        <div class="row from-control">
                            <div class="col-2"></div>
                            <button class=" form-group btn btn-primary ml-3  " type="submit">Search</button>
                        </div>


                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-bordered">
                    <table class="table table-sm">
                        <thead>
                            <tr class="bg-gray">
                                <th>Name</th>
                                <th>Number</th>
                                <th>Share</th>
                                <th>Saving</th>
                                <th>Saving+Share</th>
                                <th>Divident</th>
                                <td></td>

                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i<3 ; $i++) <tr>
                                <td>{{$i + 1}}</td>
                                <td>Mathias</td>
                                <td>2000</td>
                                <td>31-04-2018</td>
                                <td>636v</td>
                                <td></td>
                                </tr>
                                @endfor

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END card-->
        <!-- END row-->
        @endsection
        @section('styles')@endsection
        @section('scripts')
        <script src="{{ asset('angle/js/forms.js') }}"></script>
        @endsection
