
<!doctype html>

<html lang="en" class="no-js">
<head>


    <!--===============
    1 ) Head Section
    ================-->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no;">
    <title>{{$basic_profile->first_name}} {{$basic_profile->last_name}}</title>

    <!--( a ) Fav Icon -->


    <!--( b ) CSS Stylesheets -->

    <!-- Bootstrap -->
   <!-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
    <link type="text/css" rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- Library -->

    <link type="text/css" rel="stylesheet" href="{{ asset('library/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('library/popup/popup.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('library/owl-carousel/owl.carousel.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('library/owl-carousel/owl.theme.css') }}">

    <!-- STYLE Sheets -->

    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css')}}">

    <style>
        .menu > div > img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            -webkit-transition: -webkit-transform 1s linear;
            -moz-transition: -moz-transform 1s linear;
            -ms-transition: -ms-transform 1s linear;
            -o-transition: -o-transform 1s linear;
            transition: transform 1s linear;
            -webkit-filter: grayscale(50%);
            filter: grayscale(50%);
        }

        .menu > div:hover > img {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);

        }
    </style>

    <!--( c ) Javascript For Browser Support Issues -->

    <script type="text/javascript" src="{{ asset('library/modernizr/modernizr.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--===========
2 ) Preloader
============-->

<div id="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!--=========
3 ) Homepage
==========-->

<div class="home-page">

    <!--( a ) Introduction -->

    <div class="introduction">
        <img  alt="" src="{{ asset('images/home_dp.jpg')}}">
        <div class="mask">
        </div>
        <div class="intro-content">
            <h1>HELLO<br>
                I'M <span>{{$basic_profile->first_name}}</span> {{$basic_profile->last_name}}</h1>
            <h2>{{$basic_profile->designation}}</h2>
            <p class="social-media hidden-xs">

                <a target="_blank" href="{{$basic_profile->linkedin_url}}" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                <a target="_blank" href="{{$basic_profile->github_url}}" class="fa fa-github" data-toggle="tooltip" title="Github"></a>
                <a target="_blank" href="{{$basic_profile->googleplus_url}}" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                <a target="_blank" href="{{$basic_profile->quora_url}}" class="fa fa-quora" data-toggle="tooltip" title="Quora"></a>
                <a target="_blank" href="{{$basic_profile->facebook_url}}" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                <a target="_blank" href="{{$basic_profile->insta_url}}" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
            </p>

            <!-- Social Media Icons [ END ] -->

        </div>
    </div>

    <!-- ( b ) Navigation Menu -->

    <div class="menu">
        <div class="profile-btn">
            <img alt="" src="images/menu/profile_btn.jpg">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-user"></i>
                </div>
                <div class="col-sm-10">
                    <h2>PR<span>O</span>FILE</h2>
                    <h3>Some words about me.</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="resume-btn">
            <img  alt="" src="images/menu/resume_btn.jpg">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1"  align="right">

                <div class="col-sm-10">
                    <h2>RE<span>S</span>UME</h2>
                    <h3>About my experience and skills.</h3>
                </div>
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-graduation-cap"></i>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="portfolio-btn">
            <img alt="" src="images/menu/portfolio_btn.jpg">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="col-sm-10">
                    <h2>PORT<span>F</span>OLIO</h2>
                    <h3>Have a spoon of my work.</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="contact-btn">
            <img alt="" src="images/menu/contact_btn.jpg">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1"  align="right">

                <div class="col-sm-10">
                    <h2>CO<span>N</span>TACT</h2>
                    <h3>Say hello or find me.</h3>
                </div>
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-envelope-o"></i>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

    </div>
</div>

<!--=============
4 ) Close Button
==============-->

<div class="close-btn"></div>

<!--=============
5 ) Profile Page
==============-->

<div class="profile-page">

    <!--( a ) Profile Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1>PR<span>O</span>FILE</h1>
        </div>
    </div>

    <!--( b ) Profile Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Story of Glory -->

        <div class="story clearfix">
            <h2 class="small-heading">ABOUT ME</h2>
            <div class="col-lg-11 col-lg-offset-1">
                <div class="story-content clearfix">
                    <img alt="" src="images/dp.jpg" class="col-xs-offset-1 col-sm-offset-0 col-sm-4 col-xs-10">
                    <div class="col-sm-8 col-xs-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat enim arcu, eget tempor nibh congue a. Maecenas faucibus sagittis nibh, in bibendum ex. Donec eu ornare augue, nec cursus arcu. Vivamus accumsan mauris nec nulla bibendum, et eleifend nisl tristique. Pellentesque fringilla lorem id nibh auctor sagittis. Suspendisse non nisl at velit malesuada bibendum.
                        </p>
                        <p>
                            Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                        </p>


                        <a href="#">Download Resume</a>
                    </div>
                </div>
            </div>
        </div>


        <!--( B ) What Can I Do -->

        <div class="services-container clearfix">
            <h2 class="small-heading">WHAT CAN I DO?</h2>

            @foreach($specializations as $specialization)

                <div class="services col-lg-6 col-md-6 col-sm-4">
                    <i class="{{$specialization->icon}}"></i>
                    <h3>{{$specialization->title}}</h3>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p>
                                {{$specialization->description}}
                            </p>
                        </div>
                    </div>

                </div>

            @endforeach

        </div>

        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>YEARS ACTIVE</h3>
                <h1>4+</h1>
            </div>
            <div class="col-xs-4">
                <h3>PROJECTS</h3>
                <h1>10+</h1>
            </div>
            <div class="col-xs-4">
                <h3>SKILLS</h3>
                <h1>25+</h1>
            </div>
        </div>

        <!--( D ) Footer -->

        <div class="footer clearfix">
            <a href="#">{{$basic_profile->first_name}}</a>
            <p>
                Copyright © 2017 All right reserved
            </p>
        </div>
    </div>
</div>

<!--=============
6 ) Resume Page
===============-->

<div class="resume-page">

    <!--( a ) Resume Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1>RE<span>S</span>UME</h1>
        </div>
    </div>

    <!--( b ) Resume Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Education Section -->

        <div class="education clearfix">
            <h2 class="small-heading">EDUCATION</h2>

            <div class="education-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">

                @foreach($educations as $education)

                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>
                        <div class="education-content clearfix">
                            <h3>{{$education->degree}}</h3>

                                <p>

                                    <span class="glyphicon glyphicon-home"></span> &nbsp&nbsp {{$education->institute}}
                                    <br><br>
                                    <span class="glyphicon glyphicon-calendar"></span> &nbsp&nbsp {{$education->year}}
                                    <br><br>
                                    <span class="glyphicon glyphicon-education"></span>&nbsp&nbsp {{$education->percentage}}
                                </p>

                        </div>
                    </div>

                @endforeach



            </div>
        </div>

        <!--( B ) Experience Section -->

        <div class="experience clearfix">
            <h2 class="small-heading">EXPERIENCE</h2>
            <div class="experience-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">

                @foreach($experiences as $experience)

                    <div class="item">
                        <div class="bullet hidden-xs">
                        </div>

                        <div class="experience-content">
                            <h3>{{$experience->designation}}</h3>

                            <div>

                                    <div class="exps col-lg-4 col-md-4 col-sm-4">
                                        <i class="fa fa-building"></i>
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p>
                                                    {{$experience->organisation}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                <div class="exps col-lg-4 col-md-4 col-sm-4">
                                    <i class="fa fa-calendar"></i>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p>
                                                {{$experience->from}} - {{$experience->to}}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="exps col-lg-4 col-md-4 col-sm-4">
                                    <i class="fa fa-code"></i>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p>
                                                {{$experience->technology}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



        <!--( C ) Skills Section -->

        <div class="portfolio skills">
            <h2 class="small-heading">TECHNICAL EXPERTISE</h2>
            <div class="project-container skill-container">

                <div class="project-controls">
                    <button class="filter" data-filter="all">All</button>
                    @foreach($skills as $skill)
                        <button class="filter" data-filter=".{{$skill['serial']}}">{{$skill['title']}}</button>
                    @endforeach

                </div>

                <!-- Portfolio Control Buttons [ END ] -->

                <div class="projet-items clearfix" id="projects">



                    <!-- Portfolio Image -->

                    @foreach($skills as $skill)
                        @foreach($skill['subtitle'] as $subtitle)
                            <div class="col-sm-3 mix {{$skill['serial']}}">
                                    <div class="skill" data-percent="{{$subtitle['percentage']}}">
                                        <span>{{$subtitle['name']}}</span>
                                    </div>
                            </div>
                        @endforeach
                    @endforeach






                </div>
            </div>
        </div>


        <!--( C ) Footer Section -->

        <div class="footer clearfix">
            <a href="#">{{$basic_profile->first_name}} {{$basic_profile->last_name}}</a>
            <p>
                Copyright © 2017 All right reserved
            </p>
        </div>
    </div>
</div>

<!--===============
7 ) Portfolio Page
================-->

<div class="portfolio-page">

    <!--( a ) Portfolio Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1>POR<span>T</span>FOLIO</h1>
        </div>
    </div>

    <!--( b ) Portfolio Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Portfolio -->
        <div class="testimonials clearfix">
            <h2 class="small-heading">PORTFOLIO</h2>
        </div>
        <div class="portfolio ">
            <h2 class="small-heading"></h2>
            <div class="project-container">

                <div class="projet-items clearfix" id="projects">


                    <!-- Portfolio Image -->
                    <div class="row">
                    @foreach($projects as $project)

                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12  graphic-design">
                                <div class="project">
                                    <img height="300px" width="360px" src="images/portfolio/thumbs/{{$project->picture_path}}.jpg" alt="">
                                    <div class="ovrly">
                                    </div>
                                    <div class="buttons">

                                        <a href="#{{$project->id}}" class="fa fa-search show-popup"></a>
                                    </div>
                                </div>
                                <div align="center">
                                    <h3>{{$project->title}}</h3>
                                </div>

                            </div>





                    <!-- Popup Content -->

                    <div class="pop-up-box" id="{{$project->id}}" >
                        <img alt="" src="images/portfolio/{{$project->picture_path}}.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>{{$project->title}}</h3>
                            <p>
                                {{$project->description}}
                            </p>
                            @if($project->url)
                            <a href="{{$project->url}}">PREVIEW</a>
                                @endif
                        </div>
                    </div>
                        @endforeach
                    </div>




                </div>
            </div>
        </div>



        <!--( B ) Testimonials Section -->



        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>YEARS ACTIVE</h3>
                <h1>4+</h1>
            </div>
            <div class="col-xs-4">
                <h3>PROJECTS</h3>
                <h1>10+</h1>
            </div>
            <div class="col-xs-4">
                <h3>SKILLS</h3>
                <h1>25+</h1>
            </div>
        </div>

        <!-- Footer -->

        <div class="footer clearfix">
            <a href="#">{{$basic_profile->first_name}} {{$basic_profile->last_name}}</a>
            <p>
                Copyright © 2017 All right reserved
            </p>
        </div>
    </div>
</div>

<!--==============
8 ) Contact Page
===============-->

<div class="contact-page">

    <!--( a ) Contact Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1>CO<span>N</span>TACT</h1>
        </div>
    </div>

    <!--( b ) Contact Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Contact Form -->








        <!--( B ) Contact Details -->

        <div class="contact-details  clearfix">
            <h2 class="small-heading">CONTACT DETAILS</h2>
            <div class="contact col-sm-3">
                <p>
                    <i class="fa fa-map-marker"></i><br>
                    {{$basic_profile->location}}
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-3">
                <p>
                    <i class="fa fa-phone"></i><br>
                    {{$basic_profile->mobile}}
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->



            <div class="contact col-sm-3">
                <p>
                    <i class="fa fa-envelope"></i><br>
                    {{$basic_profile->email}}
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-3">
                <p>
                    <i class="fa fa-globe"></i><br>
                    {{$basic_profile->website}}
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->



            <!-- Social Media Icons [ END ] -->

        </div>

        <!--( C ) Google Map -->
        <div class="row">
            <div class="col-md-12">
                <div style="height:450px; width:auto;" class="google-map" id="google-map"></div>
            </div>
        </div>




        <div class="contact-details  clearfix">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1 col-xs-4 social-media">
                    <a target="_blank" href="{{$basic_profile->linkedin_url}}" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                </div>
                <div class="col-md-1 col-xs-4 social-media">
                    <a target="_blank" href="{{$basic_profile->github_url}}" class="fa fa-github" data-toggle="tooltip" title="Github"></a>
                </div>
                <div class="col-md-1 col-xs-4 social-media">
                    <a target="_blank" href="{{$basic_profile->googleplus_url}}" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                </div>
                <div class="col-md-1 col-xs-4 social-media">
                    <a target="_blank" href="{{$basic_profile->quora_url}}" class="fa fa-quora" data-toggle="tooltip" title="Quora"></a>
                </div>
                <div class="col-md-1 col-xs-4 social-media">
                    <a target="_blank" href="{{$basic_profile->facebook_url}}" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                </div>
                <div class="col-md-1 col-xs-4 social-media">
                    <a target="_blank" href="{{$basic_profile->insta_url}}" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                </div>
            </div>


        </div>



        <!-- ( D ) Footer -->

        <div class="footer clearfix">
            <a href="#">{{$basic_profile->first_name}}</a>
            <p>
                Copyright © 2017 All right reserved
            </p>
        </div>
    </div>
</div>

<!--============
9 ) Javascript
=============-->

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="library/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="library/easy-pie-charts/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="library/mixitup/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="library/popup/jquery.popup.min.js"></script>
<script type="text/javascript" src="library/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="library/gMap/jquery.gmap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
