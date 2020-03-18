@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            More membership Information required
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
                                    <th>Field Name</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Loan</td>
                                    </tr>
                            </tbody>
                         
                        </table>
                        <div> <a href="#"> <button class="btn btn-primary" type="submit">cancel</button></a></div>
                </div>
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
