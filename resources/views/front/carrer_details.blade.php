@extends('layout.front_layout')
@section('content')
<!--begin job detail-->
        <div class="job-detail">
            <div class="container">
                <div class="brand">
                    <div class="brand-log">
                        <img src="/assets/images/logo-brand.png" alt="">
                    </div>
                    <div class="brand-content">
                        <h2 class="heading-regular">ZARA Inc.</h2>
                        <a href="#" class="website text-light">www.zara-clothing.com</a>
                    </div>
                </div>
                <div class="aplly">
                    <a href="#" class="bnt-theme text-uppercase text-center text-regular"> Aplly </a>
                </div>
                <div class="about-company clearfix">
                    <div class="job-detail-title">
                        <h5 class="heading-regular text-capitalize">About Company</h5>
                    </div>
                    <div class="about-company-content">
                        <div class="info">
                        <span class="budding">
                            <span class="icon budding-icon"></span>
                            <span class="text-content text-light">San Francisco, CA</span>
                        </span>
                         <span class="paper">
                            <span class="icon paper-icon"></span>
                            <span class="text-content text-light">198 Applicants</span>
                        </span>
                         <span class="clock">
                            <span class="icon clock-icon"></span>
                            <span class="text-content text-light">Online : 2 days ago</span>
                        </span>
                        </div>
                        <div class="desc">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                        </div>
                    </div>
                 </div>
                <div class="jobs clearfix">
                    <div class="job-detail-title">
                        <h5 class="heading-regular text-capitalize">Jobs</h5>
                    </div>
                    <div class="jobs-content">
                            <h5 class="heading-bold">Senior UI/UX</h5>
                            <div class="price">
                                <span class="icon star-icon"></span>
                                <span class="text-price">$45,000 - $60,000</span>
                            </div>
                            <div class="info">
                                <p class="text-light">Full Time  ·  Remote OK  ·  San Francisco  ·  Designer  ·  UI/UX Design  ·  User Researcher</p>
                            </div>
                            <div class="desc">
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                            </div>
                        </div>
                </div>
                <div class="why-us clearfix">
                    <div class="job-detail-title">
                        <h5 class="heading-regular text-capitalize">Why Us</h5>
                    </div>
                    <div class="why-us-content">
                        <div class="desc">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                        </div>
                        <ul class="list-item">
                            <li>Legentis in iis qui facit eorum claritatem. Investigationes</li>
                            <li>Iusto odio dignissim qui blandit praesent</li>
                            <li>Delenit augue duis dolore te feugait nulla facilisi</li>
                        </ul>
                    </div>
                </div>
                <div class="apply-to text-center">
                    <a href="#" class="bnt-theme text-regular text-uppercase" >APPLY TO ZARA</a>
                </div>
            </div>
        </div>
        <!--end job detail-->

        <!--begin newsletter-->
        <div class="newsletter newsletter-parallax type2">
            <div class="container">
                <div class="newsletter-wrapper text-center">
                    <div class="newsletter-title">
                        <h2 class="heading-light">Be The First to Get Job Offer</h2>
                        <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                    </div>
                    <form name="subscribe-form" target="_blank" class="form-inline">
                        <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >
                        <button type="submit" class="button bnt-theme">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end newsletter-->
        @endsection
