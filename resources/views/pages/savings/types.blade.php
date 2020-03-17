@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- DATATABLE -->
    <div class="card card-default">
        <div class="content-heading ">
            <h2>TYPES </h2>
        </div>
        <div class="card">
            <div class="card-header"><br>
                <button href="#addSavingType" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
                        class="fa mr-2 fas fa-plus"></em>Add</button>
                <div class="card-body">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                            <tr>
                                <th data-priority="1">#</th>
                                <th>Category</th>
                                <th>Intererst %</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeC">
                                <td>1</td>
                                <td>Akiba Malengo</td>

                                <td><a href="#editSavingType" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#deleteSavingType" data-toggle="modal"><i class="fas fa-trash-alt"
                                            style="color:red"></i></a>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endsection
            @section('styles')@endsection
            @section('scripts')
            <script src="{{ asset('angle/js/datatable.js') }}"></script>
            @endsection

            <!-- Add Modal HTML -->
            <div id="addSavingType" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Type of Saving</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label> Type of Saving</label>
                                    <input type="text" class="form-control" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Add">
                                <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Add Modal HTML -->
            <div id="editSavingType" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Type of Saving</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label> Type of Saving</label>
                                    <input type="text" class="form-control" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Add">
                                <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal HTML -->
            <div id="deleteSavingType" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Type of Saving</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are You Sure You Want To Delete This Type?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
