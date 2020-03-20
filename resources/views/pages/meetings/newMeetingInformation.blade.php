@extends('layouts.app')
@section('content')
<!-- START card-->
<div class="content-heading">
        <div>
            Add Meeting Information
        </div>
    </div>
    <div class =card card-default >
    <div class="card-body">
        <form class="form-horizontal" method="get" action="/">
                <div class="form-group row"><label class="col-md-2 col-form-label">Choose File:</label>
                    <div class="col-md-6"><input class="form-control filestyle" type="file"
                            data-classbutton="btn btn-secondary" data-classinput="form-control inline"
                            data-icon="&lt;span class='fa fa-upload mb-4'&gt;&lt;/span&gt;">
                    </div>
                </div>
                <br></br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Date:</label>
                    <div class="col-xl-6 col-10">
                        <div class="input-group date" id="datetimepicker1"><input class="form-control" type="date"><span
                                class="input-group-append input-group-addon"></span></div>
                    </div>
                </div>
                <br><br>
                <div class="form-group row mb-2"><label class="col-md-2 col-form-label mb-2">Description:</label>
                    <div class="col-xl-6 col-10">
                        <div> <textarea id="description" rows="4" cols="68"></textarea></div>
                    </div>
                </div>
                <br><br>
                <div> <a href="#"> <button class="btn btn-primary" type="submit">Add</button></a>
                      <a href="#"> <button class="btn btn-primary" type="submit">Delete</button></a>
                </div>
            </fieldset>
        </form>
    </div>
    </div>
    <!-- END card-->
</div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
