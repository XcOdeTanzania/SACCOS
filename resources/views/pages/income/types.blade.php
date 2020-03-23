@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        INCOME CATEGORY
    </div>
</div>
<!-- START row-->
<div class="row">
    <div class="col-xl-12">
        <!-- START card-->
        <div class="card card-default">
            <div class="card-header">
                <div class="col">

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-bordered">
                    <table class="table table-sm">
                        <thead>
                            <tr class="bg-gray">
                                <th></th>
                                <th>Accounting</th>
                                <th>Income Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i<3 ; $i++) <tr>
                                <td>{{$i + 1}}</td>
                                <td>001</td>

                                <td>Sales</td>
                                <td>
                                    <a type="button" data-toggle="modal" data-target="#editType">
                                        <i class="fa fa-pen m-2 text-primary" data-toggle="tooltip"
                                            data-placement="top" title="Edit">
                                        </i></a>
                                    <a type="button" data-toggle="modal" data-target="#deleteType">
                                        <i class="fa fa-trash m-2 text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                        </i></a>
                                </td>
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

        <!--Edit Modal HTML -->
        <div id="editType" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Income Type</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label> Accounting</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Income Category</label>
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
    <div id="deleteType" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Income Type</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are You Sure You Want To Delete This Income Type?</p>
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
