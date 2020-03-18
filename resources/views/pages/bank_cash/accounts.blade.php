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
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">change</button></a></div></td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">cancel</button></a></div></td>
                                </tr>
                                <tr>
                                    <td>01JP5678U</td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">change</button></a></div></td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">cancel</button></a></div></td>
                                </tr>
                                <tr>
                                    <td>78HY8J0C67</td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">change</button></a></div></td>
                                    <td><div> <a href="#"> <button class="btn btn-primary" type="submit">cancel</button></a></div></td>
                                </tr>

                            </tbody>
                        </table>
                    
                    </div><br><br>
                    <div><a href="#"><button class="btn btn-primary" type="submit">Add</button></a></div>
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
