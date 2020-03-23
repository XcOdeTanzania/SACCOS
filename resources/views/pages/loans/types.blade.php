@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        Loan types
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
                                <th>Loan type</th>
                                <th>Interest%</th>
                                <th>Formula</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Business Loan</td>
                                <td>47.1</td>
                                <td>Reduce</td>

                                <td>
                                    <a type="button" data-toggle="modal" data-target="#editloantype">
                                        <i class="fa fa-pen m-2 text-primary" data-toggle="tooltip"
                                            data-placement="top" title="Edit">
                                        </i></a>
                                        <a type="button" data-toggle="modal" data-target="#deleteloantype">
                                        <i class="fa fa-trash m-2 text-primary" data-toggle="tooltip"
                                            data-placement="top" title="Delete">
                                        </i></a>
                                </td>
                                </tr>
                    </table>
                </div><br>
                <button href="#addloantype" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
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

 <!-- Add Modal HTML -->
 <div id="addloantype" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Loan Type</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Loan Type</label>
                                    <input type="text" class="form-control" required>
                                    <div class="form-group">
                                    <label>Interest</label>
                                    <input type="number" class="form-control" required>
                                    <div class="form-group">
                                    <label>Formula</label>
                                    <input type="text" class="form-control" required>
                                 </div>
                                </div>
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

            <!-- Edit Modal HTML -->
            <div id="editloantype" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Name of Account</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Loan Type</label>
                                    <input type="text" class="form-control" required>
                                    <div class="form-group">
                                    <label>Interest</label>
                                    <input type="number" class="form-control" required>
                                    <div class="form-group">
                                    <label>Formula</label>
                                    <input type="text" class="form-control" required>
                                  </div>
                                 </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Edit">
                                <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal HTML -->
            <div id="deleteloantype" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Loan Type</h4>
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
