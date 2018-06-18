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
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <section class="cd-horizontal-timeline">
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events">
                                
                                <ol>
                                    @foreach($_announcement as $key=>$announcement)
                                    {{-- {{dd(date('d-m-Y',strtotime($announcement->announcement_created)))}}
                                    @if($key==0)
                                    <li><a href="#0" data-date="{{date('d-m-Y',strtotime($announcement->announcement_created))}}" class="selected">16 Jan</a></li>
                                    @else --}}
                                    <li><a href="#0" data-date="{{date('d-m-Y',strtotime($announcement->announcement_created))}}" @if($key==0)class="selected" @endif>28 Feb</a></li>
                                    {{-- <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                    <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                    <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                    <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                    <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                    <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                    <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                    <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                    <li><a href="#0" data-date="03/03/2015">3 Mar</a></li> --}}
                                    {{-- @endif --}}
                                    @endforeach
                                </ol>
                                
                                <span class="filling-line" aria-hidden="true"></span> 
                            </div>
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation">
                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                    <li><a href="#0" class="next">Next</a></li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    @foreach($_announcement as $key=>$announcement)
                                    <li @if($key==0)class="selected" @endif data-date="{{date('d-m-Y',strtotime($announcement->announcement_created))}}">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/genu.jpg"> Horizontal Timeline<br/><small>January 16th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40">{{$announcement->announcement_id}}   fgdsgdsfgdsfg Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    @endforeach
                                    {{-- <li data-date="28/02/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/govinda.jpg"> Horizontal Timeline<br/><small>Feb 28th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="20/04/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/salman.jpg"> Horizontal Timeline<br/><small>March 20th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="20/05/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/varun.jpg"> Horizontal Timeline<br/><small>May 20th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="09/07/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/genu.jpg"> Horizontal Timeline<br/><small>July 9th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="30/08/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/sonu.jpg"> Horizontal Timeline<br/><small>August 30th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="15/09/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/hritik.jpg"> Horizontal Timeline<br/><small>September 15th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="01/11/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/varun.jpg"> Horizontal Timeline<br/><small>November 01st, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="10/12/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="/alumni_assets/plugins/images/users/ritesh.jpg"> Horizontal Timeline<br/><small>December 10th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="19/01/2015">
                                        <h2>Event title here</h2> <em>January 19th, 2015</em>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus. </p>
                                    </li>
                                    <li data-date="03/03/2015">
                                        <h2>Event title here</h2> <em>March 3rd, 2015</em>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus. </p>
                                    </li> --}}
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </section>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
                        </ul>
                        <ul class="m-t-20 all-demos">
                            <li><b>Choose other demos</b></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        @endsection