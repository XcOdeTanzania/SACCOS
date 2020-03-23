@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Send Messages To All Members
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="bg-gray-lighter px-3 py-2 my-3">messages</div>
                    <div class="card-body">
                    <fieldset>
                            <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Type of message</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Email</option>
                            <option>Normal message</option>
                  </select></div>
                 </fieldset>
                        <fieldset>
                        <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Message:</label>
                    <div class="col-xl-6 col-10">
                        <div> <textarea id="description" rows="4" cols="68"></textarea></div>
                    </div>
                </div>
                        </fieldset>
                <div><button class="form-group btn btn-primary ml-3" type="submit">Send</button></div>
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
