@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        List Of Budgets
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
                        <div class="row from-control">
                            <div class="col-2"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-bordered">
                    <table class="table table-sm">
                        <thead>
                            <tr class="bg-gray">
                                <th></th>
                                <th>Name</th>
                                <th>Additional %/deficit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i<3 ; $i++) 
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>The neccessary savings</td>
                                <td>15.00%</td>

                                <td>
                                    <a type="button" data-toggle="modal" data-target="#UpdateAssetDetailsModal">
                                        <i class="fa fa-edit m-2 text-primary" data-toggle="tooltip"
                                            data-placement="top" title="Edit">
                                        </i></a>
                                    <i class="fa fa-trash m-2 text-danger" data-toggle="tooltip" data-placement="top"
                                        title="Delete">
                                    </i>
                                </td>
                                </tr>
                                @endfor
                    </table>
                </div><br>
                <button href="#addSavingType" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
                        class="fa mr-2 fas fa-plus"></em>Add</button>
            </div>
        </div>
        <!-- END card-->
        <!-- END row-->
        @endsection
        @section('styles')@endsection
        @section('scripts')
        <script src="{{ asset('angle/js/forms.js') }}"></script>
        @endsection
