@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="card card-default">
    <div class="content-heading ">
        <h2>ADD DEPOSIT </h2>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">

            <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label">Choose File</label>
                    <div class="col-md-6"><input class="form-control filestyle" type="file"
                            data-classbutton="btn btn-secondary" data-classinput="form-control inline"
                            data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
                    </div>
                </div>
                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Bank/Cash</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>Bank</option>
                            <option>Cash </option>

                        </select></div>
                </div>
                <br><br>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Account Name</label>
                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                            <option>Select</option>
                            <option>CRDB</option>
                            <option>STANDARD CHARTERED</option>
                            <option>NMB </option>
                        </select></div>
                </div><br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Upload</button></a></div>
            </fieldset>
        </form>
    </div><!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
