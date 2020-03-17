@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>ACCRUAL  ACCOUNT RECEIVABLE</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="provision-tab" data-toggle="tab"
                            href="#registeraccountreceivable" role="tab" aria-controls="provision"
                            aria-selected="true">Register Account Receivable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="viewaccount-tab" data-toggle="tab" href="#viewaccountreceivable"
                            role="tab" aria-controls="viewaccount" aria-selected="false">View Account Receivable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="acrual-tab" data-toggle="tab" href="#receiveacrualincome" role="tab"
                            aria-controls="acrual" aria-selected="false">Receive Accrual Income </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="acrual1-tab" data-toggle="tab" href="#viewacrualincome" role="tab"
                            aria-controls="acrual1" aria-selected="false">View Accrual Income </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="groups" role="tabpanel" aria-labelledby="groups-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                No Record Found
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
        </div><!-- END card-->
    </div>
    @endsection
    @section('styles')@endsection
    @section('scripts')@endsection
