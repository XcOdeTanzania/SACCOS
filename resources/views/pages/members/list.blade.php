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
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">Edit</button></a></div></td>
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
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">Edit</button></a></div></td>
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
