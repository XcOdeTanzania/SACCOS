@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            List of Members
            <small>All members</small>
        </div>
    </div>
    <!-- START row-->
        <div class="row">
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Group</th>
                                    <th>Payment Number</th>
                                    <th>Joined Date</th>
                                    <th>Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hassan Juma Kitwana</td>
                                    <td>Male</td>
                                    <td>45yrs</td>
                                    <td>TRAV Group</td>
                                    <td>012JL6</td>
                                    <td>13-6-2019</td>
                                    <td>0722345678</td>
                                    <td><div><a href="#editSavingType" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td></div></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Noela Richard Kimambo</td>
                                    <td>Female</td>
                                    <td>26yrs</td>
                                    <td>SAI Group</td>
                                    <td>012JL6</td>
                                    <td>13-6-2019</td>
                                    <td>0722345678</td>
                                    <td><div> <a href="editlistofmember" data-toggle="modal"><i class="fas fa-pen"
                                            style="color:black"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                                </tr>
                                
                            </tbody>
                           
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')@endsection


 <!--Edit Modal HTML -->
 <div id="editlistofmember" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit List of Member</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>List of Member</label>
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

