@extends('layouts.front.master', ['title' => $data['hr_consulting']->meta_title, 'keyword' => $data['hr_consulting']->meta_keywords,'description' => $data['hr_consulting']->meta_descriptions ])
@section('content')
    <!-- navbar end -->

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url({{ asset('uploads/banner/'. $data['hr_consulting']->banner_image) }});"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Service Details</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>HR Consulting Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- project details page start -->
    <div class="project-area pd-top-120 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-page-content">
                        <div class="single-blog-inner">
                            <div class="thumb">
                                <img src="{{ asset('uploads/services/'. $data['hr_consulting']->hr_consulting_services_image) }}" alt="{{ $data['hr_consulting']->hr_consulting_services_image }}" title="{{ $data['hr_consulting']->hr_consulting_services_image }}" class="w-100">
                            </div>
                            <div class="details">
                                <h1>{{ $data['hr_consulting']->heading_1 }}</h1>
                                <p>{{ $data['hr_consulting']->content_1 }}</p>
                                <h2>{{ $data['hr_consulting']->heading_2 }}</h2>
                                <p>{{ $data['hr_consulting']->content_2 }}</p>
                                <h2>{{ $data['hr_consulting']->heading_3 }}</h2>
                                <p>{{ $data['hr_consulting']->content_3 }}</p>
                                <h2>{{ $data['hr_consulting']->heading_4 }}</h2>
                                <p>{{ $data['hr_consulting']->content_4 }}</p>
                                <h2>{{ $data['hr_consulting']->heading_5 }}</h2>
                                <p>{{ $data['hr_consulting']->content_5 }}</p>
                                <h4 class="pt-4 mb-4">{{ $data['hr_consulting']->key_benefit_title }}</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-gear"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $data['hr_consulting']->key_benefit_heading_1 }}</h4>
                                                <p>{{ $data['hr_consulting']->key_benefit_content_1 }}</p>
                                            </div>
                                        </div>
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-time"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $data['hr_consulting']->key_benefit_heading_2 }}</h4>
                                                <p>{{ $data['hr_consulting']->key_benefit_content_2 }}</p>
                                            </div>
                                        </div>
                                         <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-profile"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $data['hr_consulting']->key_benefit_heading_3 }}</h4>
                                                <p>{{ $data['hr_consulting']->key_benefit_content_3 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-profile"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $data['hr_consulting']->key_benefit_heading_4 }}</h4>
                                                <p>{{ $data['hr_consulting']->key_benefit_content_4 }}</p>
                                            </div>
                                        </div>
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-profile"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $data['hr_consulting']->key_benefit_heading_5 }}</h4>
                                                <p>{{ $data['hr_consulting']->key_benefit_content_5 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>{{ $data['hr_consulting']->choose_us_title }}</h2>
                                <h4>{{ $data['hr_consulting']->choose_us_heading_1 }}</h4>
                                <ul>
                                    <li>{{ $data['hr_consulting']->choose_us_content_1 }}</li>
                                </ul>
                                <h4>{{ $data['hr_consulting']->choose_us_heading_2 }}</h4>
                                <ul>
                                    <li>{{ $data['hr_consulting']->choose_us_content_2 }}</li>
                                </ul>
                                <h4>{{ $data['hr_consulting']->choose_us_heading_3 }}</h4>
                                <ul>
                                    <li>{{ $data['hr_consulting']->choose_us_content_3 }}</li>
                                </ul>
                                
                                <h4>{{ $data['hr_consulting']->choose_us_heading_4 }}</h4>
                                <ul>
                                    <li>{{ $data['hr_consulting']->choose_us_content_4 }}</li>
                                </ul>
                                
                                <h4>{{ $data['hr_consulting']->choose_us_heading_5 }}</h4>
                                <ul>
                                    <li>{{ $data['hr_consulting']->choose_us_content_5 }}</li>
                                </ul>
                                
                                <h4  class="mt-2">{{ $data['hr_consulting']->faq_title }}</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="accordion mt-2" id="accordionExample">
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        {{ $data['hr_consulting']->faq_heading_1 }}
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {{ $data['hr_consulting']->faq_content_1 }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        {{ $data['hr_consulting']->faq_heading_2 }}
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {{ $data['hr_consulting']->faq_content_2 }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        {{ $data['hr_consulting']->faq_heading_3 }}
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {{ $data['hr_consulting']->faq_content_3 }}
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        {{ $data['hr_consulting']->faq_heading_4 }}
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {{ $data['hr_consulting']->faq_content_4 }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                        {{ $data['hr_consulting']->faq_heading_5 }}
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {{ $data['hr_consulting']->faq_content_5 }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center mt-4 mt-lg-0">
                                        <div class="thumb image-hover-animate border-radius-5">
                                            <!--<img src="assets/img/service/01.webp" alt="img">-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="td-service-sidebar">
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Other Services</h4>                                
                            <ul class="catagory-items">
                                <li><a href="{{ url('sitdrone') }}">SITC in Drone</a></li>
                                <li><a href="{{ url('antidrone') }}">Anti Drone Technology</a></li>
                                <li><a href="{{ url('call-centre-solution') }}">Skill Development Training</a></li>
                                <li><a href="{{ url('skill-development-training') }}">Skill Development Training</a></li>
                                <li><a href="{{ url('corporate-trainings') }}">Corporate Trainings</a></li>
                                <li><a href="{{ url('skill-it-recruitment') }}">It Recruitment</a></li>
                                <li><a href="{{ url('non-it-recruitment') }}">Non It Recruitment</a></li>
                                <li><a href="{{ url('it-hardwares-accessories') }}">It Hardwares & Accessories</a></li>
                                <li><a href="{{ url('licensed-softwares-solutions') }}">Licensed Softwares & Solutions</a></li>
                                 <li><a href="{{ url('application-web-development') }}">Application & Web Development</a></li>
                                <li><a href="{{ url('website-development') }}">Web Based Softwares</a></li>
                                <li><a href="{{ url('software-development') }}">Software Development</a></li>
                                <li><a href="{{ url('system-integration-data-service') }}">System Integration data services</a></li>
                                <li><a href="{{ url('training-implementation') }}">Training & Implementation (Roll out of services)</a></li>
                                <li><a href="{{ url('security-survillance-project-cctv') }}">Security & Survillance Project -- CCTV</a></li>
                                <li><a href="{{ url('scanning-digitization-document-management-system') }}">Scanning and Digitization and Document management System</a></li>
                                <li><a href="{{ url('gis-remote-sensing-projects') }}">GIS/Remote Sensing Projects</a></li>
                                {{-- <li><a href="{{ url('hr-consulting-services') }}">HR Consulting Services</a></li> --}}
                                <li><a href="{{ url('drone-technology') }}">Drone Technology</a></li>
                                <li><a href="{{ url('training-development') }}">Training and Development</a></li>
                                <li><a href="{{ url('manpower-support') }}">Manpower Support</a></li>
                                <li><a href="{{ url('e-government-projects') }}">E-Government Projects</a></li>
                                <li><a href="{{ url('procurement-support') }}">Procurement Support</a></li>
                                <li><a href="{{ url('it-services') }}">It Services</a></li>
                                <li><a href="{{ url('system-integration') }}">System Integration</a></li>
                                <li><a href="{{ url('online-registration') }}">Online Registration</a></li>
                                <li><a href="{{ url('training-excellence-partner') }}">Training Excellence Partner</a></li>
                                <li><a href="{{ url('manpower-staffing') }}">Manpower Staffing</a></li>             
                            </ul>
                        </div> 
                        <div class="widget widget_archive">
                            <h4 class="widget-title">Our Related Blogs</h4>                                
                            <ul class="catagory-items">
                                <li><a href="#">Blogs</a></li>
                              
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- project details page end -->
    <!-- footer area start -->
    <!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@endsection