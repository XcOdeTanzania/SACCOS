@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            List Of Assets Categories
        </div>
    </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive table-bordered">
                        <table class="table table-sm">
                            <thead>
                                <tr class ="bg-gray">
                                    <th></th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i<3 ; $i++)
                                <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>Car</td>
                                    <td>
                                    <a type ="button" data-toggle="modal" data-target="#UpdateAssetDetailsModal" > 
                                    <i class="fa fa-edit m-2 text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                    </i></a>
                                    <i class="fa fa-trash m-2 text-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                    </i>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END card-->
        
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
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Asset Categories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group row">
            <label class="md-6 col-form-label">Category Name:</label>
            <div class="col-xl-8"><input class="form-control" type="text"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>