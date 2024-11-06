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
                        <h2 class="page-title">About Us</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- about area start -->
    <div class="about-area pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="mb-4 mb-lg-0">
                          <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1 mb-4 mb-lg-0">-->
                        <!--<img class="shape-image-sm top_image_bounce" src="{{ asset('uploads/about/'.$data['about']->about_image_sec_1_2) }}" alt="img">-->
                        <img class="shape-image" src="{{ asset('uploads/about/'.$data['about']->about_image_sec_1) }}" alt="img" width="100%">
						
                        <!--<div class="thumb">-->
                        <!--    <img src="{{ asset('uploads/about/'.$data['about']->about_image_sec_1) }}" alt="img">-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="section-title px-lg-5 mb-0">
                        <h5 class="sub-title right-line">{{  $data['about']->title }}</h5>
                        <h2 class="title">{{ $data['about']->heading }}</h2>
                        <p class="content">{{ $data['about']->content }}</p>

                        <ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                               <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                   data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                   aria-selected="true">Our Misson</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                   type="button" role="tab" aria-controls="profile" aria-selected="false">Our Vision</button>
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               <p class="content mt-4">{{ $data['mission_vission']->our_mission }}</p>
                               <div class="list-wrap mt-4">
                                    <div class="row">
                                       <div class="col-lg-6">
                                           <ul class="single-list-inner">
                                               <li>{{ $data['mission_vission']->first_point }}</li>
                                               <li>{{ $data['mission_vission']->second_point }}</li>
                                           </ul>
                                       </div>
                                       <div class="col-lg-6">
                                           <ul class="single-list-inner">
                                               <li>{{ $data['mission_vission']->third_point }}</li>
                                               <li>{{ $data['mission_vission']->fourth_point }}</li>
                                           </ul>
                                       </div>
                                    </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                               <p class="content mt-4">{{ $data['mission_vission']->our_vision }}</p>
                                
                                <div class="list-wrap mt-4">
                                   <div class="row">
                                       <div class="col-lg-6">
                                           
                                        </div>
                                        <div class="col-lg-6">
                                           
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>



                        <!--<div class="exp-wrap mt-3">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-sm-4">-->
                        <!--            <div class="single-exp-inner">-->
                        <!--                <h2><span class="counter">{{ $data['homeSectionFive']->experiences_value }}</span> <sub>Y</sub></h2>-->
                        <!--                <h5>{{ $data['homeSectionFive']->experiences_heading }}</h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-sm-4">-->
                        <!--            <div class="single-exp-inner">-->
                        <!--                <h2><span class="counter">{{ $data['homeSectionFive']->happy_client_value }}</span> <sub>M</sub></h2>-->
                        <!--                <h5>{{ $data['homeSectionFive']->happy_client_heading }}</h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-sm-4">-->
                        <!--            <div class="single-exp-inner">-->
                        <!--                <h2><span class="counter">{{ $data['homeSectionFive']->project_done_value }}</span> <sub>P</sub></h2>-->
                        <!--                <h5>{{ $data['homeSectionFive']->project_done_heading }}</h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- why choose area start -->
    
    
    <!-- <div class="team-area pd-top-115 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title ">
                        <h5 class="sub-title double-line">{{ $data['chooseUs']->title }}</h5>
                        <h2 class="title">{{ $data['chooseUs']->title }}</h2>
                        <p class="content">{{ $data['chooseUs']->content_1 }}</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-team-inner card">
                           <div class="media single-choose-inner p-2">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="icomoon-gear"></i>
                                    </div>
                                </div>
                                <div class="media-body" style="text-align:justify">
                                    <h4>{{ $data['chooseUs']->heading_2 }}</h4>
                                    <p>{{ $data['chooseUs']->content_2 }}</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 ">
                    <div class="single-team-inner card">
                        <div class="thumb">
                            <img class="shape-image" src="{{ asset('uploads/about/'.$data['chooseUs']->about_image_sec2_1)  }}" alt="img" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single-team-inner card">
                           <div class="media single-choose-inner p-2">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="icomoon-gear"></i>
                                    </div>
                                </div>
                                <div class="media-body" style="text-align:justify">
                                    <h4>{{ $data['chooseUs']->heading_2 }}</h4>
                                    <p>{{ $data['chooseUs']->content_2 }}</p>
                                </div>
                            </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4" style="height:300px;">
                    <div class="single-team-inner card ">
                        <div class="media single-choose-inner p-2">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="icomoon-time"></i>
                                    </div>
                                </div>
                                <div class="media-body" style="text-align:justify">
                                    <h4>{{ $data['chooseUs']->heading_3 }}</h4>
                                    <p>{{ $data['chooseUs']->content_3 }}</p>
                                </div>
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 ">
                    <div class="single-team-inner card">
                         <div class="media single-choose-inner p-2">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="icomoon-time"></i>
                                    </div>
                                </div>
                                <div class="media-body" style="text-align:justify">
                                    <h4>{{ $data['chooseUs']->heading_4 }} </h4>
                                    <p>{{ $data['chooseUs']->content_4 }}</p>
                                </div>
                                
                            </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  -->



    <div class="why-choose pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9">
                    <!-- <div class="about-mask-bg-wrap about-mask-bg-wrap-2 mb-4 mb-lg-0">
                       <img class="shape-image-sm top_image_bounce" src="{{ asset('uploads/about/'.$data['chooseUs']->about_image_sec2_2) }}" alt="img">
                       <img class="shape-image" src="{{ asset('uploads/about/'.$data['chooseUs']->about_image_sec2_1)  }}" alt="img">
                            <div class="thumb">
                                <img src="{{ asset('uploads/about/'.$data['chooseUs']->about_image_sec2_1) }}" alt="img">
                            </div>
                    </div> -->
                    <img class="shape-image" src="{{ asset('uploads/about/'.$data['chooseUs']->about_image_sec2_1)  }}" alt="img" >
                </div>
                 <div class="col-lg-6 order-lg-first align-self-center">
                    <div class="section-title px-lg-5 mb-0">
                        <h5 class="sub-title right-line">{{ $data['chooseUs']->title }}</h5>
                        <h2 class="title"> {{ $data['chooseUs']->title }} </h2>
                        <p class="content">{{ $data['chooseUs']->content_1 }}</p>
                        <div class="choose-wrap mt-4">
                            <div class="media single-choose-inner">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="icomoon-gear"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>{{ $data['chooseUs']->heading_2 }}</h4>
                                    <p>{{ $data['chooseUs']->content_2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="media single-choose-inner">
                        <div class="media-left">
                            <div class="icon">
                                <i class="icomoon-time"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4>{{ $data['chooseUs']->heading_3 }}</h4>
                            <p>{{ $data['chooseUs']->content_3 }}</p>
                           
                            <p> <i class=" icomoon-email"></i> Email Address - info@prakharsoftwares.com</p>
                            <p> <i class=" icomoon-telephone"></i> Phone Number - +91 11 4010 4369</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="media single-choose-inner">
                    <div class="media-left">
                        <div class="icon">
                            <i class="icomoon-time"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4>{{ $data['chooseUs']->heading_4 }} </h4>
                            <p>{{ $data['chooseUs']->content_4 }}</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <!-- why choose area end -->

    <!-- counter area start -->
    <!--<div class="counter-area bg-overlay-black pd-top-115 pd-bottom-90" style="background-image: url('assets/img/bg/7.webp');">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 col-md-12">-->
    <!--                <div class="section-title style-white">-->
    <!--                    <h2 class="title  text-center">{{ $data['professionalExperience']->title }}</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md">-->
    <!--                <a class="video-play-btn mb-5 mb-md-0 video-play-btn-base" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>-->
    <!--            </div>-->
    <!--            <div class="col-md">-->
    <!--                <div class="single-exp-inner style-white">-->
    <!--                    <h2><span class="counter"> {{ $data['professionalExperience']->experiences_value }} </span> <sub>Y</sub></h2>-->
    <!--                    <h5>{{ $data['professionalExperience']->experiences_heading }}</h5>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md">-->
    <!--                <div class="single-exp-inner style-white">-->
    <!--                    <h2><span class="counter">{{ $data['professionalExperience']->happy_client_value }} </span> <sub>M</sub></h2>-->
    <!--                    <h5> {{ $data['professionalExperience']->happy_client_heading }} </h5>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md">-->
    <!--                <div class="single-exp-inner style-white">-->
    <!--                    <h2><span class="counter">{{ $data['professionalExperience']->project_done_value }}</span> <sub>M</sub></h2>-->
    <!--                    <h5>{{ $data['professionalExperience']->project_done_heading }}</h5>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md">-->
    <!--                <div class="single-exp-inner style-white">-->
    <!--                    <h2><span class="counter">{{ $data['professionalExperience']->our_service_value }}</span> <sub>M</sub></h2>-->
    <!--                    <h5>{{ $data['professionalExperience']->our_service_area }}</h5>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- counter area end -->


      <!-- team area start -->
      <!-- pd-top-115 -->
  <div class="testimonial-area bg-sky pd-top-115 pd-bottom-20">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-10">
            <div class="section-title text-center">
              <h5 class="sub-title double-line">Team</h5>
              <h2 class="title">Meet our team expert</h2>
            </div>
          </div>
        </div>
        <div
          class="testimonial-slider-2 style-active-bg slider-control-round owl-carousel"
        >
          <div class="item">
             <div class="single-team-inner text-center">
              <div class="thumb">
                <img src="assets/img/team/1.webp" alt="img" />
              </div>
              <div class="details-wrap">
                <div class="details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                </div>
              </div>
              <div class="hover-details-wrap">
                <div class="hover-details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                  <ul class="social-media mt-3">
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
          </div>
          <div class="item">
            <div class="single-team-inner text-center">
              <div class="thumb">
                <img src="assets/img/team/1.webp" alt="img" />
              </div>
              <div class="details-wrap">
                <div class="details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                </div>
              </div>
              <div class="hover-details-wrap">
                <div class="hover-details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                  <ul class="social-media mt-3">
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
          </div>
          <div class="item">
            <div class="single-team-inner text-center">
              <div class="thumb">
                <img src="assets/img/team/1.webp" alt="img" />
              </div>
              <div class="details-wrap">
                <div class="details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                </div>
              </div>
              <div class="hover-details-wrap">
                <div class="hover-details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                  <ul class="social-media mt-3">
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
          </div>
          <div class="item">
           <div class="single-team-inner text-center">
              <div class="thumb">
                <img src="assets/img/team/1.webp" alt="img" />
              </div>
              <div class="details-wrap">
                <div class="details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                </div>
              </div>
              <div class="hover-details-wrap">
                <div class="hover-details-inner">
                  <h4><a href="team-details.html">Karshin Kumar</a></h4>
                  <p>Founder</p>
                  <ul class="social-media mt-3">
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
          </div>
        </div>
      </div>
    </div>
    <!-- team area end -->
    
    <!-- faq area start -->
    <div class="faq-area pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 order-lg-last mb-4 mb-lg-0 text-center">
                    <!--<div class="faq-image-wrap">-->
                    <!--    <div class="thumb">-->
                    <!--        <img src="{{ asset('assets/img/about/f1.webp') }}" alt="img">-->
                    <!--        <img class="img-position-1" src="{{ asset('assets/img/about/f2.webp') }}" alt="img">-->
                    <!--        <img class="img-position-2 top_image_bounce" src="{{ asset('assets/img/about/f3.webp') }}" alt="img">-->
                    <!--    </div>-->
                    <!--</div>-->
                     <img class="img-position-1" src="{{ asset('assets/img/about/faq-frequently-asked-questions-3d-illustration.jpg') }}" alt="img" height="450">
                </div>
                <div class="col-lg-6 pe-xl-5 order-lg-first align-self-center">
                    <div class="section-title mb-0">
                        <h5 class="sub-title right-line">Faq</h5>
                        <h2 class="title">Know more about our it solution</h2>
                        <p class="content"></p>
                    </div>
                    <div class="accordion mt-4" id="accordionExample">
                        @forelse($data['faqs'] as $faq)
                        <div class="accordion-item single-accordion-inner">
                            <h2 class="accordion-header" id="headingOne{{$loop->iteration }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$loop->iteration }}" aria-expanded="true" aria-controls="collapseOne{{$loop->iteration }}">
                                    {{ $faq->heading }}
                                </button>
                            </h2>
                            <div id="collapseOne{{$loop->iteration }}" class="accordion-collapse @if($loop->iteration == 1) show @endif collapse" aria-labelledby="headingOne{{$loop->iteration }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   {{ $faq->content }}
                                </div>
                            </div>
                        </div>
                        @empty
                        
                        @endforelse
                        
                        <!--<div class="accordion-item single-accordion-inner">-->
                        <!--    <h2 class="accordion-header" id="headingTwo">-->
                        <!--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
                        <!--            How does the development process work at Prakhar Software Solutions?-->
                        <!--        </button>-->
                        <!--    </h2>-->
                        <!--    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
                        <!--        <div class="accordion-body">-->
                        <!--           Our development process starts with a detailed consultation to understand your requirements. This is followed by planning, designing, developing, testing, and deploying the solution. We also provide post-deployment support and maintenance-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="accordion-item single-accordion-inner mb-0">-->
                        <!--    <h2 class="accordion-header" id="headingThree">-->
                        <!--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
                        <!--            What industries does Prakhar Software Solutions cater to?-->
                        <!--        </button>-->
                        <!--    </h2>-->
                        <!--    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
                        <!--        <div class="accordion-body">-->
                        <!--          We cater to a diverse range of industries including healthcare, finance, education, retail, and more. Our solutions are tailored to meet the unique needs of each industry we serve.-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->



    <!-- testimonial area start -------
    <div class="testimonial-area bg-sky pd-top-115 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <h5 class="sub-title double-line">Client Feedback</h5>
                        <h2 class="title">Check what’s our client say </h2>
                        <p class="content">Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-2 style-active-bg slider-control-round owl-carousel">
                <div class="item">
                    <div class="single-testimonial-inner style-4">
                        <img class="shaddow-img" src="assets/img/testimonial/02.webp" alt="img">
                        <div class="details">
                            <p>Duis leo. Sed fringilla maurisamet nibh. odales sagittionsequat leo egetendum sodales augue nec atpellentesque semper</p>
                            <h4>Karshin Kumar</h4>
                            <span class="designation">Founder</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner style-4">
                        <img class="shaddow-img" src="assets/img/testimonial/02.webp" alt="img">
                        <div class="details">
                            <p>Duis leo. Sed fringilla maurisamet nibh. odales sagittionsequat leo egetendum sodales augue nec atpellentesque semper</p>
                            <h4>Necola Amar</h4>
                            <span class="designation">HR</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner style-4">
                        <img class="shaddow-img" src="assets/img/testimonial/02.webp" alt="img">
                        <div class="details">
                            <p>Duis leo. Sed fringilla maurisamet nibh. odales sagittionsequat leo egetendum sodales augue nec atpellentesque semper</p>
                            <h4>Forgan Arit</h4>
                            <span class="designation">Manager</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner style-4">
                        <img class="shaddow-img" src="assets/img/testimonial/02.webp" alt="img">
                        <div class="details">
                            <p>Duis leo. Sed fringilla maurisamet nibh. odales sagittionsequat leo egetendum sodales augue nec atpellentesque semper</p>
                            <h4>Wilton Fork</h4>
                            <span class="designation">Co-Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

--------->
    <!-- testimonial area end -->

   
    <!-- call to action start -->
    <!--<div class="call-to-action-area pd-top-120 pd-bottom-120 text-center bg-overlay-base" style="background-image: url('assets/img/bg/5.webp');">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-lg-6 col-md-8">-->
    <!--                <div class="single-call-to-action-inner style-white">-->
    <!--                    <h5>We are here to answer your questions 24/7</h5>-->
    <!--                    <h2>Need for it solution services</h2>-->
    <!--                    <a class="btn btn-black mt-3" href="{{url('contact')}}">Contact With Us</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Digital marketing </a></li>
                            <li><a href="#">It management</a></li>
                            <li><a href="#">Cloud services</a></li>
                            <li><a href="#">Machine learning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Useful link</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Team </a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact Us</a></li>
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
@endsection