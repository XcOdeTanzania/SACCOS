@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        WITHDRAWN
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
                                <th>Number</th>
                                <th>Date </th>
                                <th>Amount</th>
                                <th>Receipt</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i<3 ; $i++) <tr>
                                <td>{{$i + 1}}</td>
                                <td>Mathias</td>
                                <td>1218</td>
                                <td>31-04-2018</td>
                                <td>2400000.00</td>
                                <td>12%</td>

                                <td>
                                    <a type="button" data-toggle="modal" data-target="#editDeposit">
                                        <i class="fa fa-pen m-2 text-primary" data-toggle="tooltip" data-placement="top"
                                            title="Edit">
                                        </i></a>
                                    <a type="button" data-toggle="modal" data-target="#deleteDeposit">
                                        <i class="fa fa-trash text-primary" data-toggle="tooltip" data-placement="top"
                                            title="Delete">
                                        </i></a>
                                </td>
                                </tr>
                                @endfor
                                <tr class="bg-gray">
                                    <td></td>
                                    <td>Total</td>
                                    <td></td>
                                    <td></td>
                                    <td>2520000.00</td>

                                    <td></td>
                                    <td><button class="btn btn-primary btn-sm m-1">Download</button> </td>
                                </tr>
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
        <div id="editDeposit" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Saving Info</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label> Members Id</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Deposited Amount</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Interest</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group"><label>
                                    Cash/Bank</label>
                                <div><select name="accounttag" class="form-control" id="accountag">
                                        <option>Select</option>
                                        <option>Cash</option>
                                        <option>Bank</option>

                                    </select></div>
                            </div>

                            <div class="form-group"><label>
                                    Account Name</label>
                                <div><select name="accounttag" class="form-control" id="accountag">
                                        <option>Select</option>
                                        <option>CRDB</option>
                                        <option>STANDARD CHARTERED</option>

                                    </select></div>
                            </div>
                            <div class="form-group">
                                <label> Payment Document</label>
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
        <div id="deleteDeposit" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Deposit</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are You Sure You Want To Delete This Deposit?</p>
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
