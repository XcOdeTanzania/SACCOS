@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Received Savings Growth
        </div>
    </div>
    <!-- START row-->
    <div class ="col">
    <div class="row">
        <div class="col-xl-12">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <div class="col mt-2">
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
                        <div class="form-group row"><label class="ml-4 col-form-label " for="input-id-1">Graph:</label>
                            <div class="col-md-6">
                            <select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Bar</option>
                            <option>Line</option>
                            <option>Column</option>
                            <option>Area</option>
                            </select>
                        </div>
                        <div class="row from-control">
                             <div class="mr-4"></div>
                             <button class=" form-group btn btn-primary   " type="submit">Search</button>
                        </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class ="container-fluid">
                        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default" id="cardChart4">
                    <div class="card-header">
                        <div class="card-title">Line</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-line flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END card-->
    </div>
    

    <!-- END row-->
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/forms.js') }}"></script>
    <script src="{{ asset('angle/js/sparkline.js') }}"></script>
    <script src="{{ asset('angle/js/flot.js') }}"></script>
@endsection
