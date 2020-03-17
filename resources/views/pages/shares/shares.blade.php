@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>SHARES</h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="card-body">
                    <table class="table table-striped my-4 w-100" id="datatable2">
                        <thead>
                            <tr>
                                <th data-priority="1">#</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Total Shares</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>Hawa</td>
                                <td>990</td>
                                <td>7000</td>

                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Adela</td>
                                <td>800</td>
                                <td>600</td>

                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Jose</td>
                                <td>500</td>
                                <td>200</td>

                            </tr>


                        </tbody>
                    </table>
                </div>
    </div>
    </fieldset>
    </form>
</div><!-- END card-->
</div>
@endsection
@section('styles')
@endsection
@section('scripts')
<script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection
