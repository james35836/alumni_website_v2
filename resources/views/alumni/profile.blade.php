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
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="/alumni_assets/plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="/alumni_assets/plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">User Name</h4>
                        <h5 class="text-white">info@myadmin.com</h5> </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>
                    <h1>258</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>
                    <h1>125</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-dribbble"></i></p>
                    <h1>556</h1> </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <ul class="nav nav-tabs tabs customtab">
                    <li class="active tab">
                        <a href="#home" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-home"></i></span> <span class="hidden-xs">Activity</span> </a>
                    </li>
                    <li class="tab">
                        <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
                    </li>
                    <li class="tab">
                        <a href="#messages" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> <span class="hidden-xs">Messages</span> </a>
                    </li>
                    <li class="tab">
                        <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="steamline">
                            <div class="sl-item">
                                <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/genu.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                    <p>assign a new task <a href="#"> Design weblayout</a></p>
                                    <div class="m-t-20 row"><img src="/alumni_assets/plugins/images/img1.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="/alumni_assets/plugins/images/img2.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="/alumni_assets/plugins/images/img3.jpg" alt="user" class="col-md-3 col-xs-12" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/sonu.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                                <div class="m-l-40"> <a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                <div class="m-t-20 row">
                                    <div class="col-md-2 col-xs-12"><img src="/alumni_assets/plugins/images/img1.jpg" alt="user" class="img-responsive" /></div>
                                    <div class="col-md-9 col-xs-12">
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa</p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/ritesh.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                                <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                            </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> </div>
                        <div class="sl-right">
                            <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                            <p>assign a new task <a href="#"> Design weblayout</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="profile">
            <div class="row">
                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                    <br>
                    <p class="text-muted">Johnathan Deo</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                    <br>
                    <p class="text-muted">(123) 456 7890</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                    <br>
                    <p class="text-muted">johnathan@admin.com</p>
                </div>
                <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                    <br>
                    <p class="text-muted">London</p>
                </div>
            </div>
            <hr>
            <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <h4 class="font-bold m-t-30">Skill Set</h4>
            <hr>
            <h5>Wordpress <span class="pull-right">80%</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
            </div>
            <h5>HTML 5 <span class="pull-right">90%</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
            </div>
            <h5>jQuery <span class="pull-right">50%</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
            </div>
            <h5>Photoshop <span class="pull-right">70%</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
            </div>
        </div>
        <div class="tab-pane" id="messages">
            <div class="steamline">
                <div class="sl-item">
                    <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/genu.jpg" alt="user" class="img-circle" /> </div>
                    <div class="sl-right">
                        <div class="m-l-40"> <a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                        <div class="m-t-20 row">
                            <div class="col-md-2 col-xs-12"><img src="/alumni_assets/plugins/images/img1.jpg" alt="user" class="img-responsive" /></div>
                            <div class="col-md-9 col-xs-12">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa</p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="sl-item">
                    <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/sonu.jpg" alt="user" class="img-circle" /> </div>
                    <div class="sl-right">
                        <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                        <div class="m-t-20 row"><img src="/alumni_assets/plugins/images/img1.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="/alumni_assets/plugins/images/img2.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="/alumni_assets/plugins/images/img3.jpg" alt="user" class="col-md-3 col-xs-12" /></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="sl-item">
                <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/ritesh.jpg" alt="user" class="img-circle" /> </div>
                <div class="sl-right">
                    <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                    <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="sl-item">
            <div class="sl-left"> <img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> </div>
            <div class="sl-right">
                <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                <p>assign a new task <a href="#"> Design weblayout</a></p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane" id="settings">
<form class="form-horizontal form-material">
    <div class="form-group">
        <label class="col-md-12">Full Name</label>
        <div class="col-md-12">
            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Email</label>
            <div class="col-md-12">
                <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input type="password" value="password" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Phone No</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Message</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line">
                                <option>London</option>
                                <option>India</option>
                                <option>Usa</option>
                                <option>Canada</option>
                                <option>Thailand</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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