@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Add Special Budgets
        </div>
    </div>
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="#" data-parsley-validate="" novalidate="">
                <!-- START card-->
                <div class="card card-default">
                    <div class="card-header">
                    <div class="bg-gray-lighter px-3 py-2 my-3">Add</div>
                    <button href="#addspecialbudget" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em
                        class="fa mr-2 fas fa-plus"></em>Add</button>
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Budget Name(English)</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Jina la tengo(Kiswahili)</label>
                                <div class="col-md-6"><input class="form-control" type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Additional %/deficit</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">cancel</button></a></div>
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


      <!--Add Modal HTML-->
      <div id="addspecialbudget" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Special budget</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>special budget</label>
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
