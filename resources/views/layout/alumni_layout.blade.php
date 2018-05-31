<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="alumni_assets/plugins/images/favicon.png">
        <title>{{$page}}</title>
        <!-- Bootstrap Core CSS -->
        <link href="/alumni_assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="/alumni_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- toast CSS -->
        <link href="/alumni_assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
        <!-- morris CSS -->
        <link href="/alumni_assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="/alumni_assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="/alumni_assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!-- Calendar CSS -->
        <link href="/alumni_assets/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
        <!-- animation CSS -->
        <link href="/alumni_assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/alumni_assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="/alumni_assets/css/colors/default.css" id="theme" rel="stylesheet">
        <link href="/alumni_assets/plugins/bower_components/horizontal-timeline/css/horizontal-timeline.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Menu CSS -->
        
        <link rel="stylesheet" type="text/css" href="/alumni_assets/plugins/bower_components/gallery/css/animated-masonry-gallery.css" />
        <link rel="stylesheet" type="text/css" href="/alumni_assets/plugins/bower_components/fancybox/ekko-lightbox.min.css" />
        <link href="/alumni_assets/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
        <!-- animation CSS -->
        <!-- Custom CSS -->
        
        <!-- color CSS -->
        
    </head>
    <body class="fix-header">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header">
                    <div class="top-left-part">
                        <a class="logo" href="index.html">
                            <b><img src="/alumni_assets/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/alumni_assets//plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                            </b>
                            <span class="hidden-xs"><img src="/alumni_assets/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="/alumni_assets//plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-left">
                        <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                        
                    </ul>
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                                <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{$user->user_profile}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{$user->user_first_name." ".$user->user_last_name}}</b><span class="caret"></span> </a>
                                <ul class="dropdown-menu dropdown-user animated flipInY">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{$user->user_profile}}" alt="user" /></div>
                                            <div class="u-text">
                                                <h4>{{$user->user_first_name." ".$user->user_last_name}}</h4>
                                                <p class="text-muted">{{$user->user_email}}</p><a href="/profile" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav slimscrollsidebar">
                            <div class="sidebar-head">
                                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                                <div class="user-profile">
                                    <div class="dropdown user-pro-body">
                                        <div><img src="{{$user->user_profile}}" alt="user-img" class="img-circle"></div>
                                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$user->user_first_name." ".$user->user_last_name}}<span class="caret"></span></a>
                                        <ul class="dropdown-menu animated flipInY">
                                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="nav" id="side-menu">
                                    <li> <a href="/dashboard" class="waves-effect"><i  class="mdi mdi-menu fa-fw"></i> <span class="hide-menu">Dashboard</span></a> </li>
                                    <li> <a href="/announcement" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Announcement</span></a> </li>
                                    <li> <a href="/manage-user" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Manage User</span></a> </li>
                                    <li> <a href="/timeline" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Timeline</span></a> </li>
                                    <li> <a href="/alumni-directory" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Alumni Directory</span></a> </li>
                                    <li> <a href="/general-chat" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">General Chat</span></a> </li>
                                    <li> <a href="/group-chat" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Group Chat</span></a> </li>
                                    <li> <a href="/gallery" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Gallery</span></a> </li>
                                    <li> <a href="/event-calendar" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Event Calendar</span></a> </li>
                                    <li> <a href="/nearby" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Nearby</span></a> </li>
                                    <li> <a href="/faqs" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Faqs</span></a></li>
                                    <li> <a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Logout</span></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div id="page-wrapper">
                            @yield('content')
                        <footer class="footer text-center"> 2018 &copy; Powered by: James Omosora </footer>
                    </div>
                </div>
                <script src="/alumni_assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap Core JavaScript -->
                <script src="/alumni_assets/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- Menu Plugin JavaScript -->
                <script src="/alumni_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
                <!--slimscroll JavaScript -->
                <script src="/alumni_assets/js/jquery.slimscroll.js"></script>
                <!--Wave Effects -->
                <script src="/alumni_assets/js/waves.js"></script>
                <!--Counter js -->
                <script src="/alumni_assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
                <script src="/alumni_assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
                <!-- chartist chart -->
                <script src="/alumni_assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
                <script src="/alumni_assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
                <!-- Sparkline chart JavaScript -->
                <script src="/alumni_assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
                <!-- Custom Theme JavaScript -->
                <script src="/alumni_assets/js/custom.min.js"></script>
                <script src="/alumni_assets/js/dashboard1.js"></script>
                <script src="/alumni_assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
                <!--Style Switcher -->
                <script src="/alumni_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
                <script src="/alumni_assets/plugins/bower_components/horizontal-timeline/js/horizontal-timeline.js"></script>
                
                <script type="text/javascript" src="/alumni_assets/plugins/bower_components/gallery/js/animated-masonry-gallery.js"></script>
                <script type="text/javascript" src="/alumni_assets/plugins/bower_components/gallery/js/jquery.isotope.min.js"></script>
                <script type="text/javascript" src="/alumni_assets/plugins/bower_components/fancybox/ekko-lightbox.min.js"></script>
                
                <!--Style Switcher -->
                <script src="/alumni_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
                <script src="/alumni_assets/plugins/bower_components/calendar/jquery-ui.min.js"></script>
                <script src="/alumni_assets/plugins/bower_components/moment/moment.js"></script>
                <script src='/alumni_assets/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
                <script src="/alumni_assets/plugins/bower_components/calendar/dist/jquery.fullcalendar.js"></script>
                <script src="/alumni_assets/plugins/bower_components/calendar/dist/cal-init.js"></script>
                <script type="text/javascript">
                $(document).ready(function($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                event.preventDefault();
                return $(this).ekkoLightbox({
                onShown: function() {
                if (window.console) {
                return console.log('Checking our the events huh?');
                }
                },
                onNavigate: function(direction, itemIndex) {
                if (window.console) {
                return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                }
                }
                });
                });
                //Programatically call
                $('#open-image').click(function(e) {
                e.preventDefault();
                $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function(e) {
                e.preventDefault();
                $(this).ekkoLightbox();
                });
                // navigateTo
                $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                event.preventDefault();
                var lb;
                return $(this).ekkoLightbox({
                onShown: function() {
                lb = this;
                $(lb.modal_content).on('click', '.modal-footer a', function(e) {
                e.preventDefault();
                lb.navigateTo(2);
                });
                }
                });
                });
                });
                </script>
            </body>
        </html>