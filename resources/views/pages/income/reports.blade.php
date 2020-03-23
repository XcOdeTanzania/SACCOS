@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        INCOME REPORTS
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
                        <label for="user" class="col-form-label mr-2">From:</label>
                        <div>
                            <div class="input-group date AngleDate">
                                <input id="from" class="form-control" type="text" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text fas fa-calendar-alt"></span></span>
                            </div>
                        </div>
                        <label for="user" class="ml-4 col-form-label mr-2">To:</label>
                        <div>
                            <div class="input-group date AngleDate">
                                <input id="to" class="form-control" type="text" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text fas fa-calendar-alt"></span></span>
                            </div>
                        </div>
                        <div class="row from-control">
                            <div class="col-2"></div>
                            <div class="col"><select name="option" class="form-control" id="accountag">
                                    <option>Select</option>
                                    <option>Members</option>
                                    <option>Non-Members</option>

                                </select></div>
                        </div>
                        <div class="row from-control">
                            <div class="col-2"></div>
                            <button class=" form-group btn btn-primary ml-3  " type="submit">Search</button>
                        </div>
                        <div class="row from-control">
                            <div class="col-2"></div>
                            <button class=" form-group btn btn-primary ml-3  " type="submit">Total Income</button>
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
                                <th>Income Name</th>
                                <th> Date</th>
                                <th>Amount </th>
                                <th>Receipt</th>
                                <th>Description</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i<3 ; $i++) <tr>
                                <td>{{$i + 1}}</td>
                                <td>Mathias</td>
                                <td>31-04-2018</td>
                                <td>66</td>
                                <td>87</td>
                                <td>hawa</td>


                                <td>
                                    <a type="button" data-toggle="modal" data-target="#editReports">
                                        <i class="fa fa-pen m-2 text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                        </i></a>
                                    <a type="button" data-toggle="modal" data-target="#deleteReports">
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
        <div id="editReports" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Reports Info</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label> Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Number</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Receipt</label>
                                <input type="text" class="form-control" required>
                            </div>
                           <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Description</label>
                            <div class="col-xl-6 col-10">
                                <div> <textarea id="description" rows="4" cols="55"></textarea></div>
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

        <!-- Delete Modal HTML -->
        <div id="deleteReports" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Report</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are You Sure You Want To Delete This Report?</p>
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
