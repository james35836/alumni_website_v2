<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sayidan_h1.kenzap.com/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 May 2018 08:57:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="/assets/favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="/assets/js/libs/modernizr.custom.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <title>ALUMNI | {{$page}}</title>
    <style>
    select
    {
        width: 100%;
        max-width: 322px;
        margin: 0 auto;
        border-top: none;
        border-left: none;
        border-right: none;
        height: 50px;
        text-align: center;
        /*color: #9f9f9f;*/
        font-size: 14px;
        font-family: "Montserrat-Light";
        margin-bottom: 10px;
        border-bottom-color: #EEEEEE;
        text-align-last: center;
    }
    </style>
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
    <div class="header-wrapper header-position">
        <header id="header" class="container-header type2">
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="top-right col-md-9 col-sm-12 col-xs-12 pull-right">
                            <ul class="list-inline">
                                <li class="hidden-xs">
                                    <a href="mailto:paloc_alumni@gmail.com">
                                        <span class="icon mail-icon"></span>
                                        <span class="text">paloc_alumni@gmail.com</span>
                                    </a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#">
                                        <span class="icon phone-icon"></span>
                                        <span class="text">+639 876 543 210</span>
                                    </a>
                                </li>
                                <li class="top-search">
                                    <form class="navbar-form search no-margin no-padding">
                                        <input type="text" name="q" class="form-control input-search" placeholder="search..." autocomplete="off">
                                        <button type="submit" class="lnr lnr-magnifier"></button>
                                    </form>
                                </li>
                                <li class="login">
                                    <a href="/login">Log In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">

                    <!-- <div class="logo hidden-sm hidden-xs">
                        <a href="#"> <img src="/assets/images/logo.png" alt="logo"></a>
                    </div> -->
                    
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="{{ (Request::segment(1)  =='home') ? 'current' : ''||(Request::segment(1)  =='') ? 'current' : ''  }}">
                                    <a href="/home" >HOME</a>
                                </li>
                                <li class="{{ (Request::segment(1)  =='about') ? 'current' : ''  }}">
                                    <a href="/about" >ABOUT US</a>
                                </li>
                                <li class="{{ (Request::segment(1)  =='program') ? 'current' : ''  }}">
                                    <a href="/program">PROGRAM &amp; EVENTS</a>
                                </li>

                                <li class="{{ (Request::segment(1)  =='alumni_story') ? 'current' : ''  }}">
                                   <a href="/alumni_story">ALUMNI STORY</a>
                                </li>
                                <li class="{{ (Request::segment(1)  =='alumni_directory') ? 'current' : ''  }}">
                                   <a href="/alumni_directory">ALUMNI DIRECTORY</a>
                                </li>
                                <li class="{{ (Request::segment(1)  =='carrer') ? 'current' : ''  }}">
                                    <a href="/carrer">CAREER OPPORTUNITY</a>
                                </li>
                                <li class="{{ (Request::segment(1)  =='contact') ? 'current' : ''  }}">
                                    <a href="/contact">CONTACT US</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="logo-mobile">
                            <a href="#"> <img src="/assets/images/logo-small.png" alt="logo"></a>
                        </div>
                        <div class="mobile-menu ">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!--End header wrapper-->
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <style>
            @media (min-width: 992px)
            {
                .padding-div 
                {
                    padding-top:100px;
                }
            }
            @media (max-width: 991px)
            {
                .padding-div 
                {
                    display:none;
                }
            }
        </style>
        <div class="padding-div">
        </div>
         @yield('content')
     </div>

    <!--End content wrapper-->
    <!--Begin footer wrapper-->
    <div class="footer-wrapper type2">
        <footer class="foooter-container">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 animated footer-col">
                            <div class="contact-footer">
                                <div class="logo-footer">
                                    <a href="homepage-1.html"><img src="/assets/images/logo-footer.png" alt=""></a>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-light">Paloc Elementary School is a Public Elementary School specifically located at- in the municipality of Maragusan, in province of Compostela Valley.</p>
                                </div>
                                <div class="contact-phone-email">
                                    <span class="contact-phone"><a href="#">+369876543210</a></span>
                                    <span class="contact-email"><a href="#">paloc_alumni@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12  col-xs-12 animated footer-col">
                            <div class="links-footer">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <h6 class="heading-bold">DASHBOARD</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="register-page.html">REGISTER</a></li>
                                            <li><a href="career-opportunity.html">CAREER</a></li>
                                            <li><a href="alumni-story.html">STORY</a></li>
                                            <li><a href="alumni-directory.html">DIRECTORY</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-4 col-xs-12">
                                        <h6 class="heading-bold">ABOUT US</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="event-single.html">EVENTS</a></li>
                                            <li><a href="galery.html">GALLERY</a></li>
                                            <li><a href="homepage-1.html">HOMEPAGE V1</a></li>
                                            <li><a href="homepage-2.html">HOMEPAGE V2</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-4 col-xs-12">
                                        <h6 class="heading-bold">SUPPORT</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="job-detail.html">FAQ</a></li>
                                            <li><a href="about-us.html#contacts">CONTACT US</a></li>
                                            <li><a href="blog.html">ORGANIZER</a></li>
                                            <li><a href="blog-single-fullwith.html">SOCIAL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 animated footer-col">
                            <div class="links-social">
                                <div class="login-dashboard">
                                    <a href="/register" class="bg-color-theme text-center text-regular">Create Account</a>
                                </div>
                                <ul class="list-inline text-center">
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <p class="copyright text-light">©2018 Alumni Association of Paloc Elementary School</p>
                </div>
            </div>
        </footer>
    </div>
    <!--End footer wrapper-->
</div>

<script src="/assets/js/libs/jquery-2.2.4.min.js"></script>
<script src="/assets/js/libs/bootstrap.min.js"></script>
<script src="/assets/js/libs/owl.carousel.min.js"></script>
<script src="/assets/js/libs/jquery.meanmenu.js"></script>
<script src="/assets/js/libs/jquery.syotimer.js"></script>
<script src="/assets/js/libs/parallax.min.js"></script>
<script src="/assets/js/libs/jquery.waypoints.min.js"></script>
<script src="/assets/js/custom/main.js"></script>
<script>
    jQuery(document).ready(function () {
        $('#time').syotimer({
            year: 2016,
            month: 12,
            day: 7,
            hour: 7,
            minute: 7,
        });
    });
</script>
</body>
</html>