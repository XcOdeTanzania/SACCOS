@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Loan Types
            <small>All types of loan</small>
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
                                    <th>Loan types</th>
                                    <th>Interest%</th>
                                    <th>Formula</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Education loan</td>
                                    <td>37.1</td>
                                    <td>Reduce</td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">Edit</button></a></div></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Business loan</td>
                                    <td>76</td>
                                    <td>Reduce</td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">Edit</button></a></div></td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div><br>
                    <div> <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')@endsection
