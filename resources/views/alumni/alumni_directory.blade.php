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
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Contact listing</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Age</th>
                                                <th>Joining date</th>
                                                <th>Salery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/genu.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/arijit.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/hritik.jpg" alt="user" class="img-circle" /> Hritik Roshan</a>
                                                </td>
                                                <td>hritik@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2016</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/john.jpg" alt="user" class="img-circle" /> John Abraham</a>
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle" /> Pawandeep kumar</a>
                                                </td>
                                                <td>pawandeep@gmail.com</td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/ritesh.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/salman.jpg" alt="user" class="img-circle" /> Salman Khan</a>
                                                </td>
                                                <td>salman@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2016</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/sonu.jpg" alt="user" class="img-circle" /> Sonu Nigam</a>
                                                </td>
                                                <td>sonu@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/varun.jpg" alt="user" class="img-circle" /> Varun Dhawan</a>
                                                </td>
                                                <td>varun@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>43</td>
                                                <td>12-10-2010</td>
                                                <td>$5200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/genu.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/arijit.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>
                                                    <a href="contact-detail.html"><img src="/alumni_assets/plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Email"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Age"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Salary"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                <input type="file" class="upload"> </div>
                                                                        </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            
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
                <div class="row">
                    <!-- .col -->
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