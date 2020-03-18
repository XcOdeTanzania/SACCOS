@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            All Assets
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
                            <div class="card-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-sm">
                                        <thead>
                                        <tr class ="bg-gray">
                                            <th></th>
                                            <th>Asset</th>
                                            <th>Category</th>
                                            <th>Date Purchased</th>
                                            <th>Amount</th>
                                            <th>Increase/Depreciation</th>
                                            <th> Age</th>
                                            <th>Increase/Depreciation per Year</th>
                                            <th>Increase/Depreciation</th>
                                            <th>Value Now</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=0; $i<3 ; $i++)
                                            <tr>
                                                <td>{{$i + 1}}</td>
                                                <td>Car</td>
                                                <td>cars</td>
                                                <td>31-04-2018</td>
                                                <td>2400000.00</td>
                                                <td >12%</td>
                                                <td>4 yrs</td>
                                                <td>2800000.00</td>
                                                <td>1152000.00</td>
                                                <td>1248000.00</td>
                                                <td>
                                                <a type ="button" data-toggle="modal" data-target="#UpdateAssetDetailsModal" > 
                                                <i class="fa fa-edit m-2 text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                                </i></a>
                                                <i class="fa fa-trash m-2 text-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                </i>
                                                </td>
                                            </tr>
                                        @endfor
                                        <tr class = "bg-gray">
                                            <td></td>
                                            <td>Total</td>
                                            <td></td>
                                            <td></td>
                                            <td>2520000.00</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1480000.00</td>
                                            <td><button class = "btn btn-primary btn-sm m-1">Download</button> </td>
                                        </tr>
                                        </tbody>
                                    </table>
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