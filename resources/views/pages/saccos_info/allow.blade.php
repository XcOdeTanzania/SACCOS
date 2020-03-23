@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Allow to change Information
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="bg-gray-lighter px-3 py-2 my-3">Change</div>
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">For now: They can change</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Change:</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Prevent them from changing</option>
                            <option>Let them change</option>
                  </select></div>
                  </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Save</button></a></div>
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
