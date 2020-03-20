@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>Record the balance with the cash reminders for the year</h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">The expiry date:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div><br><br>
                <fieldset>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">The reminders left</label>
                                <div class="col-md-6"><input class="form-control" type="number"></div>
                            </div>
                        </fieldset>

                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Select Account</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>TRANC SACCOS LTD</option>
                            <option>01J266AT1</option>
                            <option>9277Q8j</option>

                        </select></div>
                </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Save</button></a>
                    <a href="deletecashreminders"> <button class="btn btn-primary" type="submit">Delete</button></a>
                </div>
            </fieldset>
        </form>
    </div><!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection

<!-- Delete Modal HTML -->
<div id="deletecashreminders" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Cash Reminders</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are You Sure You Want To Delete This Type?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
