@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Internal Loans Ledger
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
                        <label for="user" class="ml-4 col-form-label mr-2">Year:</label>
                        <div>
                             <select id="user" class="custom-select custom-select-sm" name="user">
                             <option selected="">Open this select menu</option>
                             @for ($year=1990;$year<=2020;$year++)
                             <option value="{{$year}}">{{$year}}</option>
                             @endfor
                             </select>
                        </div>
                        <div class="row from-control">
                             <div class="col-2"></div>
                                  <button class=" form-group btn btn-primary ml-3  " type="submit">Search</button>
                        </div>
                            </div>
                            </div>
                            <div class="col mt-2 ml-4"><div class="row">Internal Loans Ledger, Year:2016
                            </div></div>
                            </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-sm">
                                        <thead>
                                        <tr class = "bg-gray">
                                            <th style="border-left:1px;border-color:#1D68A7 !important;" colspan="4">DEBIT</th>
                                            <th style="border-left:1px;border-color:#1D68A7 !important;"colspan="3">CREDIT</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th style="border-left:1px;border-color:#1D68A7;!important;">Amount</th>
                                            <th  class= "boarder-left boarder-primary">Date</th>
                                            <th>Description</th>
                                            <th style="border-left:1px;border-color:#1D68A7;!important;"> Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=0; $i<3 ; $i++)
                                            <tr>
                                                <td>{{$i + 1}}</td>
                                                <td>10-01-2020</td>
                                                <td></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">50000.00</td>
                                                <td>10-01-2020</td>
                                                <td ></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">50000.00</td>
                                            </tr>
                                        @endfor
                                        <tr class = "bg-gray">
                                            <td></td>
                                            <td>Total</td>
                                            <td></td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">150000.00</td>
                                            <td></td>
                                            <td></td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">150000.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- END card-->
        
    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')@endsection
