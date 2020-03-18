@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>VIEW ESTIMATES</h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="card-body">
                    <table class="table table-striped my-4 w-100" id="datatable2">
                        <thead>
                            <tr>
                                <th data-priority="1"></th>
                                <th>Description</th>
                                <th>Estimated Expenditure</th>
                                <th>Expenditure</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td>INCOME</td>
                                <td>Riba</td>
                                <td>00</td>
                                <td>5000</td>

                            </tr>
                            <tr class="gradeC">
                                <td>TOTAL INCOME</td>
                                <td>Viingilio</td>
                                <td>00</td>
                                <td>5000</td>

                            </tr>
                            <thead>
                                <tr>
                                    <th data-priority="1"></th>
                                    <th>Description</th>
                                    <th>Estimated Expenditure</th>
                                    <th>Expenditure</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeX">
                                    <td>ExPENDITURE</td>
                                    <td>Riba</td>
                                    <td>00</td>
                                    <td>5000</td>

                                </tr>
                                <tr class="gradeC">
                                    <td>TOTAL ExPENDITURE</td>
                                    <td>Viingilio</td>
                                    <td>00</td>
                                    <td>5000</td>

                                </tr>
                            </tbody>
                        </tbody>
                    </table>
                </div>
    </div>

    
    </fieldset>
    </form>
</div><!-- END card-->

@endsection
@section('styles')
@endsection
@section('scripts')
<script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection
