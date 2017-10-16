
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
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="col-sm-10">
                    <h2>RE<span>S</span>UME</h2>
                    <h3>Something about my experience and skills.</h3>
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
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="col-sm-10">
                    <h2>CO<span>N</span>TACT</h2>
                    <h3>Say hello or find me.</h3>
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
            <h2 class="small-heading">STORY OF GLORY</h2>
            <div class="col-lg-11 col-lg-offset-1">
                <div class="story-content clearfix">
                    <img alt="" src="images/dp.jpg" class="col-xs-offset-1 col-sm-offset-0 col-sm-4 col-xs-10">
                    <div class="col-sm-8 col-xs-12">
                        <h3>AN AWESOMW DESIGNER ON PLANET</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat enim arcu, eget tempor nibh congue a. Maecenas faucibus sagittis nibh, in bibendum ex. Donec eu ornare augue, nec cursus arcu. Vivamus accumsan mauris nec nulla bibendum, et eleifend nisl tristique. Pellentesque fringilla lorem id nibh auctor sagittis. Suspendisse non nisl at velit malesuada bibendum.
                        </p>
                        <p>
                            Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                        </p>
                        <p>
                            Curabitur pharetra tincidunt lobortis. Duis dolor felis, sollicitudin ac dapibus quis, hendrerit ut est. Sed faucibus neque iaculis nisi accumsan, et condimentum nunc scelerisque. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl. Fusce elementum orci in dignissim cursus.
                        </p>
                        <a href="#" class="hire-me">Hire Me</a>
                        <a href="#">Download Resume</a>
                    </div>
                </div>
            </div>
        </div>

        <!--( B ) What Can I Do -->

        <div class="services-container clearfix">
            <h2 class="small-heading">WHAT CAN I DO?</h2>
            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-eyedropper"></i>
                <h3>GRAPHIC DESIGN</h3>
                <p>
                    Sed mi sem, sagi eros ac, laoreet commodo diam. Morbi id est in urna facilisis dictum. Mauris rutrum mollis neque a sodales. Mauris sed ipsum nec turpis finibus.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-eye"></i>
                <h3>WEB DESIGN</h3>
                <p>
                    Vivamus et rhoncus mauris, suscipit efficitur elementum ex. Interdum et malesuada ipsum primis in faucibus. Nullam odio libero, cursus ac ligula suscipit maximus.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-code"></i>
                <h3>WEB DEVELOPMENT</h3>
                <p>
                    Praesent ac varius ante, eu suscipit odio. Vesmolito modo pretium scelerisque. Sed vulputate ac varius ante dapibus tempor. Maecenas ut cursus aug suscipit malesuada felis.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-lightbulb-o"></i>
                <h3>BRIGHT IDEAS</h3>
                <p>
                    Nunc egestas sed efficitur nulla a sodales. Pellentesque tincidunt diam quam, rhoncus congue pellentesque eu, faucibus nec turpis. Quisque laoreet tincidunt turpis dolor tempus.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-rocket"></i>
                <h3>APP DEVELOPMENT</h3>
                <p>
                    Vestibulum dictum tincidunt pulvinar elementum. Etiam urna massa, vestibulum id purus id, vehicula placerat dui. Aenean sit amet pulvinar urna. Ut at mi semper, eleifend.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-wrench"></i>
                <h3>SETTINGS</h3>
                <p>
                    Vestibulum tincidunt sed dapibus elit, sed accumsan libero. Nam vulputate tincidunt quam quis nibh porttitor, a tincidunt lacinia. Nulla turpis arcu, hendrerit volutpat tincidunt at, eget est.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

        </div>

        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>PROJECTS DONE</h3>
                <h1>300+</h1>
            </div>
            <div class="col-xs-4">
                <h3>HAPPY CLIENTS</h3>
                <h1>100+</h1>
            </div>
            <div class="col-xs-4">
                <h3>COFFEE CUPS</h3>
                <h1>250+</h1>
            </div>
        </div>

        <!--( D ) Footer -->

        <div class="footer clearfix">
            <a href="#">{{$basic_profile->first_name}} {{$basic_profile->last_name}}</a>
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
                        <div class="education-content">
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
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et pulvinar ligula. Praesent maximus ornare quam, id consectetur dui eleifend nec. Nam consectetur orci id nulla varius, quis facilisis dui vulputate. Sed ultrices eu erat non mollis. Phasellus ut libero.
                            </p>
                        </div>
                    </div>

                @endforeach





            </div>
        </div>

        <!--( C ) Skills Section -->

        <div class="skills clearfix">
            <h2 class="small-heading">SKILLS</h2>
            <div class="clearfix">
                <div class="skill-container col-sm-3">
                    <h3>Photoshop</h3>
                    <div class="skill" data-percent="60">
                        <span>60%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-3">
                    <h3>Illustrator</h3>
                    <div class="skill" data-percent="65">
                        <span>65%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-3">
                    <h3>Dreamweaver</h3>
                    <div class="skill" data-percent="80">
                        <span>80%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-3">
                    <h3>Design</h3>
                    <div class="skill" data-percent="55">
                        <span>55%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-3">
                    <h3>Development</h3>
                    <div class="skill" data-percent="90">
                        <span>90%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-3">
                    <h3>Coding</h3>
                    <div class="skill" data-percent="85">
                        <span>85%</span>
                    </div>
                </div>

                <div class="skill-container col-sm-3">
                    <h3>Coding</h3>
                    <div class="skill" data-percent="85">
                        <span>85%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

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

        <div class="portfolio">
            <h2 class="small-heading">PORTFOLIO</h2>
            <div class="project-container">

                <div class="project-controls">
                    <button class="filter" data-filter="all">All</button>
                    <button class="filter" data-filter=".graphic-design">Graphic Design</button>
                    <button class="filter" data-filter=".web-design">Web Designs</button>
                    <button class="filter" data-filter=".app-development">App Development</button>
                </div>

                <!-- Portfolio Control Buttons [ END ] -->

                <div class="projet-items clearfix" id="projects">

                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_1.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-1" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-1">
                        <img alt="" src="images/portfolio/image_1.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_2.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-2" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-2">
                        <img alt="" src="images/portfolio/image_2.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_3.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-3" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-3">
                        <img alt="" src="images/portfolio/image_3.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_4.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-4" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-4">
                        <img alt="" src="images/portfolio/image_4.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_5.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-5" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-5">
                        <img alt="" src="images/portfolio/image_5.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_6.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-6" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-6">
                        <img alt="" src="images/portfolio/image_6.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_7.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-7" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-7">
                        <img alt="" src="images/portfolio/image_7.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_8.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-8" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-8">
                        <img alt="" src="images/portfolio/image_8.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_9.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-9" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-9">
                        <img alt="" src="images/portfolio/image_9.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->



                    <!-- Portfolio Image -->

                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                        <div class="project">
                            <img src="images/portfolio/thumbs/image_10.jpg" alt="">
                            <div class="ovrly">
                            </div>
                            <div class="buttons">
                                <a href="#" class="fa fa-link"></a>
                                <a href="#portfolio-10" class="fa fa-search show-popup"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Popup Content -->

                    <div class="pop-up-box" id="portfolio-10">
                        <img alt="" src="images/portfolio/image_10.jpg" class=" hidden-xs">
                        <div class="popup-content">
                            <h3>PROJECT NAME</h3>
                            <p>
                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                            </p>
                            <a href="#">PREVIEW</a>
                        </div>
                    </div>

                    <!-- Single Portfolio Item [ END ] -->

                </div>
            </div>
        </div>

        <!--( B ) Testimonials Section -->

        <div class="testimonials clearfix">
            <h2 class="small-heading">SOME WORDS FROM CLIENTS</h2>
            <div class="testimonials-container col-sm-10 col-sm-offset-1">
                <div class="owl-carousel">
                    <div>
                        <p>
                            <i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper aliquet nulla, eget feugiat mi pellentesque sed. In neque erat, vulputate eu justo et, posuere scelerisque nulla.<i class="fa fa-quote-right"></i>
                        </p>
                        <h3>Justin Peterson</h3>
                    </div>

                    <!-- Single Testimonial Item [ END ] -->

                    <div>
                        <p>
                            <i class="fa fa-quote-left"></i>Sed vulputate nibh id molestie efficitur. Maecenas cursus est a quam ullamcorper, eu iaculis ullamcorper. Maecenas pretium aliquet mi, tincidunt semper lectus rutrum et.<i class="fa fa-quote-right"></i>
                        </p>
                        <h3>Cristina Devis</h3>
                    </div>

                    <!-- Single Testimonial Item [ END ] -->

                    <div>
                        <p>
                            <i class="fa fa-quote-left"></i>Ut tristique pellentesque arcu, in hendrerit urna rhoncus sed. Vivamus vel diam ex. Nunc nunc vitae lectus facilisis imperdiet. Proin pretium tempus dui, et vehicula purus.<i class="fa fa-quote-right"></i>
                        </p>
                        <h3>Jonny Watts</h3>
                    </div>

                    <!-- Single Testimonial Item [ END ] -->

                    <div>
                        <p>
                            <i class="fa fa-quote-left"></i>Etiam sollicitudin ornare pulvinar. Nullam a vulputate lectus. Maecenas a nisl leo. Curabitur ante nisi, pellentesque et turpis eget, iaculis porta lorem. Aenean in justo nec turpis maximus.<i class="fa fa-quote-right"></i>
                        </p>
                        <h3>{{$basic_profile->first_name}} {{$basic_profile->last_name}}</h3>
                    </div>

                    <!-- Single Testimonial Item [ END ] -->

                </div>
            </div>
        </div>

        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>PROJECTS DONE</h3>
                <h1>300+</h1>
            </div>
            <div class="col-xs-4">
                <h3>HAPPY CLIENTS</h3>
                <h1>100+</h1>
            </div>
            <div class="col-xs-4">
                <h3>COFFEE CUPS</h3>
                <h1>250+</h1>
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

        <div style="height:500px;" class="google-map" id="google-map"></div>


        <div class="contact-details  clearfix">
            <div class="col-xs-12 social-media">

                <a target="_blank" href="{{$basic_profile->linkedin_url}}" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                <a target="_blank" href="{{$basic_profile->github_url}}" class="fa fa-github" data-toggle="tooltip" title="Github"></a>
                <a target="_blank" href="{{$basic_profile->googleplus_url}}" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                <a target="_blank" href="{{$basic_profile->quora_url}}" class="fa fa-quora" data-toggle="tooltip" title="Quora"></a>
                <a target="_blank" href="{{$basic_profile->facebook_url}}" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                <a target="_blank" href="{{$basic_profile->insta_url}}" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>

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
