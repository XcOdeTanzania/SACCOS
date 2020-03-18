@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Meeting Records
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
                            <div class="input-group date AngleDate" >
                             <input id="from" class="form-control" type="text"/>
                             <span class="input-group-append input-group-addon">
                             <span class="input-group-text fas fa-calendar-alt"></span></span>
                            </div>
                        </div>
                        <label for="user" class="ml-4 col-form-label mr-2">To:</label>
                        <div>
                        <div class="input-group date AngleDate">
                             <input id="to" class="form-control" type="text"/>
                             <span class="input-group-append input-group-addon">
                             <span class="input-group-text fas fa-calendar-alt"></span></span>
                            </div>
                        </div>
                        <div class="row from-control">
                             <div class="col-2"></div>
                                  <button class=" form-group btn btn-primary ml-3  " type="submit">Search</button>
                        </div>
                            </div>
                            </div>
                            </div> 
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
    <script src="{{ asset('angle/js/forms.js') }}"></script>
@endsection
<!-- Modal -->
<div class="modal fade" id="UpdateAssetDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Asset Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>