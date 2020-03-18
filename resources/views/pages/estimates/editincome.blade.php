@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        EDIT ESTIMATED INCOME
    </div>
</div>
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <div class="table-responsive bootgrid">
            <table class="table table-striped" id="bootgrid-command">
                <thead>
                    <tr>
                        <th>Income Category </th>
                        <th> Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Asset Transfer</td>
                        <td>
                            <div class="col-xl-6 col-10">
                                <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                        type="text"><span class="input-group-append input-group-addon"></span></div>
                        </td>
                        <td><a href="#" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                    </tr>
                    <tr>
                        <td>Liability Transfer</td>
                        <td>
                            <div class="col-xl-6 col-10">
                                <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                        type="text"><span class="input-group-append input-group-addon"></span></div>
                        </td>
                        <td><a href="#" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                    </tr>
                    <tr>
                        <td>Cash At Main Vault</td>
                        <td>
                            <div class="col-xl-6 col-10">
                                <div class="input-group date" id="datetimepicker1"><input class="form-control"
                                        type="text"><span class="input-group-append input-group-addon"></span></div>
                        </td>
                        <td><a href="#" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <button class="btn btn-primary" type="submit" data-dismiss="modal"><em
                    class="fa mr-2 fa-check"></em>Save</button>
        </div>
    </div>
</div>
@endsection
@section('styles')@endsection
@section('scripts')
<script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection
