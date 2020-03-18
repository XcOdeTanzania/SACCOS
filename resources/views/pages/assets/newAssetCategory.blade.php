@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Add New Asset Category
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Category Name:</label>
                                <div class="col-md-6"><input class="form-control" type="email"></div>
                            </div>
                        </fieldset>
                    <div>
                       <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a>
                       <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                    </div>
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
