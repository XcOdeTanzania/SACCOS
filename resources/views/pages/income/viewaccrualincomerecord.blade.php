@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>PROVISION & ACCRUAL</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="registeraccountreceivable-tab" data-toggle="tab"
                            href="#registeraccountreceivable" role="tab" aria-controls="registeraccountreceivable"
                            aria-selected="true">Register Account Receivable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="viewaccountreceivable-tab" data-toggle="tab"
                            href="#viewaccountreceivable" role="tab" aria-controls="viewaccountreceivable"
                            aria-selected="false">View Account Receivable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="receiveacrualincome-tab" data-toggle="tab" href="#receiveacrualincome"
                            role="tab" aria-controls="receiveacrualincome" aria-selected="false">Receive Accrual Income
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="viewacrualincome-tab" data-toggle="tab" href="#viewacrualincome"
                            role="tab" aria-controls="viewacrualincome" aria-selected="false">View Accrual Income </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="viewaccountreceivable" role="tabpanel"
                        aria-labelledby="viewaccountreceivable-tab">
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
