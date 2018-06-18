@extends('layout.alumni_layout')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{$page}}</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">{{ Request::segment(1) }} {{ Request::segment(2) }} {{ Request::segment(3) }}</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-4 col-sm-4 text-center">
                        <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/arijit.jpg" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                        <p>
                            <address>
                                795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                                <br>
                                <br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-md-4 col-sm-4">
        <div class="white-box">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user" class="img-circle img-responsive"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                    <p>
                        <address>
                            795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                            <br/>
                            <br/>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- /.col -->
<!-- .col -->
<div class="col-md-4 col-sm-4">
    <div class="white-box">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/john.jpg" alt="user" class="img-circle img-responsive"></a>
            </div>
            <div class="col-md-8 col-sm-8">
                <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                <p>
                    <address>
                        795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                        <br/>
                        <br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </p>
        </div>
    </div>
</div>
</div>
<!-- /.col -->
</div>
</div>
@endsection