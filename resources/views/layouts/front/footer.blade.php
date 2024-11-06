<!-- footer area start -->
<footer class="footer-area bg-cover" style="background-image: url('assets/img/bg/2.webp');">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget widget_about">
                    <h4 class="widget-title">About company</h4>
                    <div class="details">
                        <p >With an objective to serve our society in terms of enhanced employment rate and better lifestyle to every individual of this nation, we are working efficiently with our clients who encompass both the corporate and government organizations. Prakhar Software Solutions Pvt. Ltd.</p>
                      
                        <ul class="social-media">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/Prakharsoftware" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="https://twitter.com/Prakharsoftware" target="_blank">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="https://www.linkedin.com/company/prakhar-software/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.instagram.com/prakhar.softwares/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="youtube" href="https://www.youtube.com/@PrakharSoftwares" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Service</h4>
                    <ul class="text-white">
                        <li> <a href="{{ url('sitdrone') }}" class="text-white">SITC in Drone</a></li>
                        <li><a href="{{ url('antidrone') }}" class="text-white">Anti Drone Technology</a></li>
                        <li><a href="{{ url('skill-development-training') }}" class="text-white">Skill Development Training</a></li>
                        <li><a href="{{ url('corporate-trainings') }}" class="text-white">Corporate Trainings</a></li>
                        <li><a  href="{{ url('skill-it-recruitment') }}" class="text-white">Skill It Recruitment</a></li>
                        <li><a  href="{{ url('non-it-recruitment') }}" class="text-white">Non It Recruitment</a></li>
                        <li><a  href="{{ url('web-based-softwares') }}" class="text-white">Web Based Softwares</a></li>
                        <li><a  href="{{ url('licensed-softwares-solutions') }}" class="text-white">Licensed Softwares & Solutions</a></li>
                        <li><a  href="{{ url('application-web-development') }}" class="text-white">Application & Web Development</a></li>
                   
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Useful link</h4>
                    <ul>
                        <li><a href="{{ url('about') }}" class="text-white">About Us</a></li>
                        <li><a href="{{ url('blog') }}" class="text-white">Blog</a></li>
                        <li><a href="{{ url('services') }}" class="text-white">Service</a></li>
                        <li><a href="{{ url('career') }}" class="text-white">Career </a></li>
                        <li><a href="#" class="text-white">Privacy Policy </a></li>
                        <li><a href="#" class="text-white">Terms & Conditions </a></li>
                         <li><a href="{{url('/posh-act')}}" class="text-white">Posh Act</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget widget_subscribe">
                    <h4 class="widget-title">Contact us</h4>
                    <div class="single-input-inner style-border style-bg-none">
                        <input type="text" placeholder="Your Email">
                        <button><i class="fa fa-arrow-right"></i></button>
                    </div>
                    <div class="details">
                        <h4 class="text-white widget-title">Address</h4>
                        <p class="text-white">C – 11, LGF, Opp. State Bank of India, Malviya Nagar, New Delhi - 110017 , India</p>
                        <a href="https://cmmiinstitute.com/pars/appraisals/59457" target="_blank">
                                <img src="{{ asset('assets/images/cmmi-level2.png') }}" class="img-fluid bg-white" style="border-radius:20px;" alt="cmmi">
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <p>© <?php echo date("Y"); ?>. All Rights Reserved Designed and Development by  <a href="https://prakharsoftwares.com/" target="_blank">Prakhar Software Solutions </a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

{{-- Gallery Js --}}


<!-- all plugins here -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/imageload.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script> 
<!--<script src="{{ asset('assets/js/tweenmax.min.js') }}"></script>-->
<script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/owl.carousel2.thumbs%400.1.8/dist/owl.carousel2.thumbs.min.js"></script>-->
<script src='https://cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js'></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>-->
<script src="{{ asset('assets/js/waypoint.js') }}"></script>
<script src="{{ asset('assets/js/counterup.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<!-- main js  -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--<script data-cfasync="false" src='https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js'></script>-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- main js  -->
<!--<script src="{{ asset('assets/js/main.js')  }}"></script>-->
<script type="text/javascript" charset="utf-8">
    // $(document).ready(function(){
    //     $("area[rel^='/']").prettyPhoto();
        
    //     $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000});
    //     $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

    //     $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
    //         custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
    //         changepicturecallback: function(){ initialize(); }
    //     });

    //     $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
    //         custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
    //         changepicturecallback: function(){ _bsap.exec(); }
    //     });
    // });
    </script>
@yield('scripts')
</body>
</html>
