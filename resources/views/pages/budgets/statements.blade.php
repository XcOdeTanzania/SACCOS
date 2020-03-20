@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        Incentives Statements
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
                                <th>Month</th>
                                <th>Year</th>
                                <th>Amount</th>
                                <th>Budget</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i<3 ; $i++) 
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>12</td>
                                <td>2013</td>
                                <td>120000</td>
                                <td>Education</td>

                                <td>
                                <a href="#editincentivesstatements" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#deleteincentivesstatements" data-toggle="modal"><i class="fas fa-trash-alt"
                                            style="color:red"></i></a>
                                </td>
                                </tr>
                                @endfor
                    </table>
                </div><br>
                <button href="#addincentivesstatements" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
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
        <div id="addincentivesstatements" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Statements</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>statements</label>
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
            <div id="editincentivesstatements" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Statements</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Statements</label>
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
            <div id="deleteincentivesstatements" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Statements</h4>
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

