@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Is the sponsor allowed to borrow before the guarantor finishes the repayment?
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="card-body">
                    <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">For now:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Yes</option>
                            <option>No</option>
                  </select></div>
                 </fieldset>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Change</button></a></div>
                 </fieldset>   
                <!-- END card-->
            </form>
        </div>
    </div>
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/validation.js') }}"></script>
@endsection
