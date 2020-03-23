@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Bank Accounts
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-xl-6">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <!-- START table-responsive-->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name Of Account</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TRAC SACCOS LTD</td>
                                    <td><a href="#editnameofaccount" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#deletenameofaccount" data-toggle="modal"><i class="fas fa-trash-alt"
                                            style="color:red"></i></a>
                                </tr>
                                <tr>
                                    <td>01JP5678U</td>
                                    <td><a href="#editnameofaccount" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#deletenameofaccount" data-toggle="modal"><i class="fas fa-trash-alt"
                                            style="color:red"></i></a>
                                </tr>
                                <tr>
                                    <td>78HY8J0C67</td>
                                    <td><a href="#editnameofaccount" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#deletenameofaccount" data-toggle="modal"><i class="fas fa-trash-alt"
                                            style="color:red"></i></a>   
                            </tbody>
                        </table>
                    </div><br><br>
                    <button href="#addnameofaccount" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
                        class="fa mr-2 fas fa-plus"></em>Add</button>
                    <!-- END table-responsive-->
                </div>
               </div>
            <!-- END card-->
        </div>
    </div>
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/sparkline.js') }}"></script>
@endsection

 <!-- Add Modal HTML -->
 <div id="addnameofaccount" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Name Account</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name of Account</label>
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

            <!-- Edit Modal HTML -->
            <div id="editnameofaccount" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Name of Account</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name of Account</label>
                                    <input type="text" class="form-control" required>
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
            <div id="deletenameofaccount" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Name of Account</h4>
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

