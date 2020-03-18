@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        MEMBERS INFORMATION
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

                        <label for="user" class="ml-4 col-form-label mr-2">Up To:</label>
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

        </div>
    </div>
    <!-- END card-->
    <!-- END row-->
    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/forms.js') }}"></script>
    @endsection
