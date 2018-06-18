@extends('layout.alumni_layout')
@section('content')
<div class="container-fluid">
    @include('include.title')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/alumni/post-event/submit">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-12">Event Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">Select file</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="event_image"/>
                                </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Event Name</label>
                        <div class="col-md-12">
                            <input type="text" name="event_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Event Date</label>
                        <div class="col-md-12">
                            <input type="text" name="event_date" class="form-control" placeholder="Event Date"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Event Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="event_description" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection