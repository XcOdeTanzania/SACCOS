@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        List of all users
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
                                <th>SN</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Robin</td>
                                <td>Chacha</td>
                                <td>Kimambo</td>
                                <td>Robby</td>
                                <td>Admin</td>

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
