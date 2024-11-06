@extends('layouts.front.master')
@section('content')
    <!-- navbar end -->
	
    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img/bg/1.webp');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Our Services</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- service area start -->
    <div class="service-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-profile"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('sitdrone') }}">SITC in Drone</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-layer"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('antidrone') }}">Anti Drone Technology</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-application"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('skill-development-training') }}">Skill Development Training</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-cloud-data"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('corporate-trainings') }}">Corporate Trainings</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-megaphone"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('skill-it-recruitment') }}">Skill It Recruitment</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-lock"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('non-it-recruitment') }}">Non It Recruitment</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-magnifiying-glass"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('it-hardwares-accessories') }}">It Hardwares & Accessories</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-computer"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('licensed-softwares-solutions') }}">Licensed Softwares & Solutions</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('application-web-development') }}">Application & Web Development</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('web-based-softwares') }}">Web Based Softwares</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('system-integration-data-service') }}">System Integration Data Service</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('training-implementation') }}">Training & Implementation (Roll out of services)</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('security-survillance-project-cctv') }}">Security & Survillance Project -- CCTV</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('scanning-digitization-document-management-system') }}">Scanning and Digitization and Document management System</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('gis-remote-sensing-projects') }}">GIS/Remote Sensing Projects</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-hover-base text-center">
                        <div class="icon-box">
                            <i class="icomoon-deep-learning"></i>
                        </div>
                        <div class="details">
                            <h3><a href="{{ url('hr-consulting-services') }}">HR Consulting Services</a></h3>
                            <p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- how it work area start -->
    <div class="how-it-work-area bg-blue pd-top-110 pd-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title style-white text-center">
                        <h5 class="sub-title double-line">Work Process</h5>
                        <h2 class="title">How to work it</h2>
                        <p class="content">Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-inner style-two text-center">
                        <div class="count-wrap">
                            <div class="count-inner">
                                <h2>01</h2>
                            </div>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h4>Select a project</h4>
                                <p>Vestibulum ante ipsumusn eratultrices posu world </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-inner style-two text-center">
                        <div class="count-wrap">
                            <div class="count-inner">
                                <h2>02</h2>
                            </div>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h4>Project analysis</h4>
                                <p>Vestibulum ante ipsumusn eratultrices posu world </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-inner style-two text-center">
                        <div class="count-wrap">
                            <div class="count-inner">
                                <h2>03</h2>
                            </div>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h4>Execute</h4>
                                <p>Vestibulum ante ipsumusn eratultrices posu world </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-inner style-two text-center">
                        <div class="count-wrap">
                            <div class="count-inner">
                                <h2>04</h2>
                            </div>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h4>Deliver result</h4>
                                <p>Vestibulum ante ipsumusn eratultrices posu world </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-slider pd-top-90 pd-bottom-110 owl-carousel">
                <div class="item">
                    <div class="thumb text-center">
                        <img src="assets/img/client/1.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="assets/img/client/2.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="assets/img/client/3.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="assets/img/client/4.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="assets/img/client/1.webp" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- how it work area end -->

    <!-- testimonial-slider start -->
    <div class="testimonial-slider bg-sky bg-relative testimonial-slider-bg pd-top-120 pd-bottom-120">
        <div class="container bg-relative">
            <div class="slider testimonial-thumb">
                <div class="item">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb mb-4 mb-md-0">
                                <img src="assets/img/testimonial/2.webp" alt="img">
                                <div class="quote-wrap">
                                    <div class="quote">
                                        <img src="assets/img/quote.webp" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-testimonial-inner px-lg-5">
                                <div class="details">
                                    <h2>Donas Foknar</h2>
                                    <span>Customer,USA</span>
                                    <p>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et, dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat fermentposuere. Morbi porttitor augue id </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb mb-4 mb-md-0">
                                <img src="assets/img/testimonial/2.webp" alt="img">
                                <div class="quote-wrap">
                                    <div class="quote">
                                        <img src="assets/img/quote.webp" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-testimonial-inner px-lg-5">
                                <div class="details">
                                    <h2>Donas Foknar</h2>
                                    <span>Customer,USA</span>
                                    <p>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et, dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat fermentposuere. Morbi porttitor augue id </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb mb-4 mb-md-0">
                                <img src="assets/img/testimonial/2.webp" alt="img">
                                <div class="quote-wrap">
                                    <div class="quote">
                                        <img src="assets/img/quote.webp" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-testimonial-inner px-lg-5">
                                <div class="details">
                                    <h2>Donas Foknar</h2>
                                    <span>Customer,USA</span>
                                    <p>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et, dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat fermentposuere. Morbi porttitor augue id </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb mb-4 mb-md-0">
                                <img src="assets/img/testimonial/2.webp" alt="img">
                                <div class="quote-wrap">
                                    <div class="quote">
                                        <img src="assets/img/quote.webp" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-testimonial-inner px-lg-5">
                                <div class="details">
                                    <h2>Donas Foknar</h2>
                                    <span>Customer,USA</span>
                                    <p>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et, dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat fermentposuere. Morbi porttitor augue id </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider testimonial-nav-slider">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/testimonial/1.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/testimonial/2.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/testimonial/1.webp" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/testimonial/2.webp" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-slider end -->
    
    <!-- call to action start -->
    <div class="call-to-action-area pd-top-120 pd-bottom-120 text-center bg-overlay-base" style="background-image: url('assets/img/bg/5.webp');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="single-call-to-action-inner style-white">
                        <h5>We are here to answer your questions 24/7</h5>
                        <h2>Need for it solution services</h2>
                        <a class="btn btn-black mt-3" href="{{ url('contact') }}">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- call to action start -->

    <!-- footer area start -->
    <!-- <footer class="footer-area bg-black bg-cover" style="background-image: url('assets/img/bg/2.webp');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">About company</h4>
                        <div class="details">
                            <p>Address</p>
                            <p>Melbourne’s GPO 434  VIC 3074, Australia.</p>
                            <ul class="social-media">
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="youtube" href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Service</h4>
                        <ul>
                            <li><a href="service.html">Web design</a></li>
                            <li><a href="service.html">Digital marketing </a></li>
                            <li><a href="service.html">It management</a></li>
                            <li><a href="service.html">Cloud services</a></li>
                            <li><a href="service.html">Machine learning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Useful link</h4>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Team </a></li>
                            <li><a href="project.html">Portfolio</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_subscribe">
                        <h4 class="widget-title">Contact us</h4>
                        <div class="single-input-inner style-border style-bg-none">
                            <input type="text" placeholder="Your Email">
                            <button><i class="fa fa-arrow-right"></i></button>
                        </div>
                        <label><input type="checkbox">Maecenas tempususcondime honcus sem quam  libero</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <p>© 2023. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@endsection