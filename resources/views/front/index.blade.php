@extends('layouts.front.master', ['title' => 'Prakhar Software Solutions Pvt. Ltd.', 'keyword' => 'Prakhar Software Solutions Pvt. Ltd.','description' => 'Prakhar Software Solutions Pvt. Ltd.' ])

@section('content')

<style>
    .carousel .slide-image.active {
        opacity: 1;
        transition: opacity 1s ease-in;
    }

    .carousel .slide-image {
        opacity: 0;
        display: block;
        left: 0;
        transition: opacity 1s ease-out;
    }

</style>
<!-- banner area start -->
<div class="banner-area banner-area-2 bg-relative" style="background-image: url('assets/img/banner/banner.png');">
    <div class="bg-overlay-gradient"></div>
    <div class="banner-bg-img" style="background-image: url('assets/img/banner/4.webp');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9">
                <div class="banner-inner">
                    <h1 class="sub-title">{{ $data['banner']->title }}</h1>
                    <h2 class="title" style="font-size: 43px;">{{ $data['banner']->heading }} <span>{{ $data['banner']->second_heading }}</span></h2>
                    <p class="content">{{$data['banner']->content}}</p>
                    <div class="btn-wrap">
                        <a class="btn btn-base" href="#">Get Started</a>
                        <a class="btn btn-black" href="{{ url('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area end -->

<!-- intro area start -->
<div class="intro-area mg-top--100 bg-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner">
                    <div class="thumb media">
                        <div class="media-left">
                            <i class="icomoon-gear"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4>{{$data['banner']->first_box_heading}}</h4>
                        </div>
                    </div>
                    <div class="details">
                        <p>{{$data['banner']->first_box_content}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner">
                    <div class="thumb media">
                        <div class="media-left">
                            <i class="icomoon-time"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4>{{$data['banner']->second_box_heading}}</h4>
                        </div>
                    </div>
                    <div class="details">
                        <p>{{$data['banner']->second_box_content}}</p>
                    </div>h
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner">
                    <div class="thumb media">
                        <div class="media-left">
                            <i class="icomoon-money"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4>{{$data['banner']->third_box_heading}}</h4>
                        </div>
                    </div>
                    <div class="details">
                        <p>{{$data['banner']->third_box_content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- intro area end -->

<!-- about area start -->
<div class="about-area pd-top-90 pd-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mask-bg-wrap mask-bg-img-3">
                    <div class="thumb">
                        <img src="{{ asset('uploads/about/'.$data['about']->about_image ) }}" alt="{{ $data['about']->about_image }}" title="{{ $data['about']->about_image }}" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="section-title px-lg-5 mb-0">
                    <h5 class="sub-title left-border">{{ $data['about']->title }}</h5>
                    <h2 class="title">{{ $data['about']->heading }}</h2>
                    <p class="content-strong mt-2">{{ $data['about']->second_heading }} . </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->

<!-- service area start -->
<div class="service-area pd-top-115 pd-bottom-90" style="background-image: url('assets/img/bg/6.webp');">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-xl-6 col-lg-7 mb-4 mb-lg-0">
                    <h5 class="sub-title left-border">{{ $data['service']->first_heading }}</h5>
                    <h2 class="title">{{ $data['service']->second_heading }}</h2>
                    <p class="content mt-2">{{ $data['service']->content_second_heading }}</p>
                </div>
                <div class="col-xl-6 col-lg-5 align-self-center">
                    <div class="btn-wrap text-md-end">
                        <a class="btn btn-base" href="{{ route('services') }}">Discover More Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="icomoon-layer"></i>
                    </div>
                    <div class="details">
                        <h3>{{ $data['service']->drone_tect_heading }}</h3>
                        <p>{{ $data['service']->drone_tech_content }}</p>
                    </div>
                    <div class="details-hover-wrap">
                        <div class="details-hover">
                            <h3>{{ $data['service']->drone_tect_heading }}</h3>
                            <p>{{ $data['service']->drone_tech_content }}</p>
                            <a class="btn btn-base btn-small" href="{{ url('sitdrone') }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="icomoon-application"></i>
                    </div>
                    <div class="details">
                        <h3>{{ $data['service']->manpower_support_heading }}</h3>
                        <p>{{ $data['service']->manpower_content }}</p>
                    </div>
                    <div class="details-hover-wrap">
                        <div class="details-hover">
                            <h3>{{ $data['service']->manpower_support_heading }}</h3>
                            <p>{{ $data['service']->manpower_content }}</p>
                            <a class="btn btn-base btn-small" href="{{ url('skill-it-recruitment') }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="icomoon-cloud-data"></i>
                    </div>
                    <div class="details">
                        <h3>{{ $data['service']->web_app_heading }}</h3>
                        <p>{{ $data['service']->web_app_content }}</p>
                    </div>
                    <div class="details-hover-wrap">
                        <div class="details-hover">
                            <h3>{{ $data['service']->web_app_heading }}</h3>
                            <p>{{ $data['service']->web_app_content }}</p>
                            <a class="btn btn-base btn-small" href="{{ url('application-web-development') }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="icomoon-megaphone"></i>
                    </div>
                    <div class="details">
                        <h3>{{ $data['service']->gis_based_service_head }}</h3>
                        <p>{{ $data['service']->gis_based_service_content }}</p>
                    </div>
                    <div class="details-hover-wrap">
                        <div class="details-hover">
                            <h3>{{ $data['service']->gis_based_service_head }}</h3>
                            <p>{{ $data['service']->gis_based_service_content }}</p>
                            <a class="btn btn-base btn-small" href="{{ url('gis-remote-sensing-projects') }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="icomoon-lock"></i>
                    </div>
                    <div class="details">
                        <h3>{{ $data['service']->system_integration_head }}</h3>
                        <p>{{ $data['service']->system_integration_content }}</p>
                    </div>
                    <div class="details-hover-wrap">
                        <div class="details-hover">
                            <h3>{{ $data['service']->system_integration_head }}</h3>
                            <p>{{ $data['service']->system_integration_content }}</p>
                            <a class="btn btn-base btn-small" href="{{ url('system-integration-data-service') }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="icomoon-magnifiying-glass"></i>
                    </div>
                    <div class="details">
                        <h3>{{ $data['service']->hr_outsourcing_head }}</h3>
                        <p>{{ $data['service']->hr_outsourcing_content }}</p>
                    </div>
                    <div class="details-hover-wrap">
                        <div class="details-hover">
                            <h3>{{ $data['service']->hr_outsourcing_head }}</h3>
                            <p>{{ $data['service']->hr_outsourcing_content }}</p>
                            <a class="btn btn-base btn-small" href="{{url('hr-consulting-services')}}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service area end -->

<!-- skill area start -->
<div class="skill-area bg-relative pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pe-5 mb-5 mb-lg-0">
                <div class="section-title mb-0">
                    <h5 class="sub-title left-border">{{ $data['professionalSkill']->title }} </h5>
                    <h2 class="title">{{ $data['professionalSkill']->heading }} </h2>
                </div>
                <div class="skill-progress-area mt-4">
                    <div class="single-progressbar">
                        <h6>{{ $data['professionalSkill']->web_development }}</h6>
                        <div class="progress-item" id="progress-running">
                            <div class="progress-bg">
                                <div id="progress" class="progress-rate" data-value="{{ $data['professionalSkill']->web_development_count }}">
                                </div>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="{{ $data['professionalSkill']->web_development_count }}">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-progressbar">
                        <h6>{{ $data['professionalSkill']->drone_technology }}</h6>
                        <div class="progress-item" id="progress-running-1">
                            <div class="progress-bg">
                                <div id="progress-1" class="progress-rate" data-value="{{ $data['professionalSkill']->drone_technology_count }}">
                                </div>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="{{ $data['professionalSkill']->drone_technology_count }}">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-progressbar">
                        <h6>{{ $data['professionalSkill']->manpower_support }}</h6>
                        <div class="progress-item" id="progress-running-2">
                            <div class="progress-bg">
                                <div id="progress-2" class="progress-rate" data-value="{{ $data['professionalSkill']->manpower_support_count }}">
                                </div>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="{{ $data['professionalSkill']->manpower_support_count }}">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-progressbar">
                        <h6>{{ $data['professionalSkill']->system_integration }}</h6>
                        <div class="progress-item mb-0" id="progress-running-3">
                            <div class="progress-bg">
                                <div id="progress-3" class="progress-rate" data-value="{{ $data['professionalSkill']->system_integration_count }}">
                                </div>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="{{ $data['professionalSkill']->system_integration_count }}">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-xl-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="thumb border-radius-5 mb-4 image-hover-animate">
                            <img src="{{ asset('uploads/professional/'.$data['professionalSkill']->skill_first_image) }}" alt="{{ $data['professionalSkill']->skill_first_image }}" title="{{ $data['professionalSkill']->skill_first_image }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- skill area end -->



<!-- counter area start -->
<div class="counter-area bg-base pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-exp-inner style-white">
                    <h2><span class="counter">{{ $data['professionalExperience']->experiences_value }}</span> <sub>+ Y</sub></h2>
                    <h5>{{ $data['professionalExperience']->experiences_heading }}</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-exp-inner style-white">
                    <h2><span class="counter">{{ $data['professionalExperience']->happy_client_value }}</span></h2>
                    <h5>{{ $data['professionalExperience']->happy_client_heading }}</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-exp-inner style-white">
                    <h2><span class="counter">{{ $data['professionalExperience']->project_done_value }}</span></h2>
                    <h5>{{ $data['professionalExperience']->project_done_heading }}</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-exp-inner style-white">
                    <h2><span class="counter">{{ $data['professionalExperience']->our_service_value }}</span></h2>
                    <h5>{{ $data['professionalExperience']->our_service_area }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter area end -->

<!-- testimonial area start -->

<div class="testimonial-area pd-top-90 bg-cover bg-cover-70" style="background-image: url('assets/img/other/map.webp');">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <h2 class="title text-center">Testimonials</h2>
                <h3 class="text-center">OUR FANTASTIC CLIENT SAYS</h3>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9">
                <div class="testimonial-slider-3 owl-carousel" data-slider-id="1">
                    <div>
                        <div class="single-testimonial-inner style-two text-center">

                            <div class="details">
                                <h2>ABM KNOWLEDEWARE</h2>
                                <span>BDO</span>
                                <p>As a regular client of Prakhar Software Solutions, I've always expected high quality, and this template has far exceeded my expectations. It’s undoubtedly one of the best themes I’ve ever used. The code quality is impeccable, showcasing the expertise and detail that Prakhar Software Solutions consistently delivers. I highly recommend this template to anyone who values professionalism and top-tier design in their projects.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="single-testimonial-inner style-two text-center">

                            <div class="details">
                                <h2>CMS COMPUTERS LTD</h2>
                                <span>Director</span>
                                <p>Prakhar Software Solutions has truly outdone themselves with their latest website template. Every minor detail has been meticulously cared for, resulting in a clean and modern design that is versatile enough for any type of website. As a user, I'm impressed by the attention to detail and the seamless functionality this template offers. Choosing Prakhar Software Solutions means choosing excellence. Highly recommended for anyone seeking a reliable and beautifully designed website solution
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="single-testimonial-inner style-two text-center">

                            <div class="details">
                                <h2>SBC EXPORTS LTD</h2>
                                <span>Director</span>
                                <p>Prakhar Software Solutions has delivered yet another excellent template. It’s one of the best themes I have ever used, standing out with its exceptional code quality. The attention to detail and robust performance it offers are truly commendable. This template from Prakhar Software Solutions not only meets but exceeds professional standards. Highly recommended for anyone looking to elevate their digital presence with a reliable and superbly crafted theme..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="single-testimonial-inner style-two text-center">

                            <div class="details">
                                <h2>EURECATECH GROUP</h2>
                                <span>CEO</span>
                                <p>Prakhar Software Solutions has impressed me once again with their meticulous attention to detail. Their latest template showcases a clean, modern design that’s adaptable for any type of website. It’s clear that every minor detail has been carefully considered, ensuring a seamless user experience. This commitment to quality makes Prakhar Software Solutions a top choice for anyone in need of a professional and versatile website design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="single-testimonial-inner style-two text-center">

                            <div class="details">
                                <h2>RICOH INDIA LIMITED</h2>
                                <span>Director</span>
                                <p>Prakhar Software Solutions has crafted a template that epitomizes perfection in every minor detail. The clean, modern design is not only visually appealing but also incredibly versatile, suitable for any type of website. The dedication to detail and quality that Prakhar Software Solutions brings to their work is evident in every aspect of this template. I highly recommend it to anyone looking for a reliable and aesthetically pleasing website solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  testimonial area end -->

<!-- how it work area start -->
<div class="how-it-work-area pd-top-100 pd-bottom-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center">
                    <h5 class="sub-title double-border">Work Process</h5>
                    <h2 class="title">How we work</h2>

                </div>
            </div>
        </div>
        <div class="how-it-work-inner">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('images/timeline.gif') }}" width="1100" alt="timeline.gif" title="timeline.gif" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- how it work area end -->

<!------gallery area start---->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Gallery</h2>
            <div class="text-center" style="margin-left:38.5%;">
                <ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Achievement</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event" type="button" role="tab" aria-controls="profile" aria-selected="false">Events</button>
                    </li>
                </ul>
            </div>

            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="content mt-4"></p>

                <div class="list-wrap mt-4">
                    <div class="row">
                        @foreach($data['Gallery'] as $key => $value)

                        <div class="col-lg-3">
                            <div class="shadow p-2 mb-3 bg-body rounded">
                                <a href="{{ asset('uploads/gallery/'.$value->images) }}" target="_blank" rel="prettyPhoto[gallery1]">
                                    <img src="{{ asset('uploads/gallery/'.$value->images) }}" width="100%" height="auto" alt="{{ $value->images }}" title="{{ $value->images }}" />
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @if($data['count'] > 8)
                        <div class="col-lg-12 col-md-12 text-center mt-4">
                            <a href="{{ route('events.gallery') }}" target="_blank"><button type="button" class="btn btn-base">View More</button></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab" style="display:none">

                <div class="list-wrap mt-4">
                    <div class="row">
                        @foreach($data['events'] as $key => $value)
                        <div class="col-lg-3">
                            <div class="shadow p-2 mb-3 bg-body rounded">
                                <a href="{{ asset('uploads/gallery/'.$value->images) }}" target="_blank" rel="prettyPhoto[gallery1]">
                                    <img src="{{ asset('uploads/gallery/'.$value->images) }}" width="100%" height="auto" alt="{{ $value->images }}" title="{{ $value->images }}" />
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-12 col-md-12 text-center mt-4">
                            <a href="{{ route('events.gallery') }}" target="_blank"><button type="button" class="btn btn-base">View More</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<!------gallery area end---->

<!-- blog area start -->
<div class="blog-area pd-top-85">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="section-title text-center">
                    <h5 class="sub-title double-line">Blog Post</h5>
                    <h2 class="title">Read Our Latest Tips &Tricks</h2>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach( $data['blogs'] as $blog)

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-inner style-2">
                    <div class="thumb">
                        <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="{{ $blog->image }}" title="{{ $blog->image }}" class="w-100" height="300">
                    </div>
                    <div class="details">
                        <h4><a href="#">{{ ucwords($blog->title)  }}</a></h4>
                        <ul class="blog-meta">
                            <li><i class="far fa-user"></i> By {{ ucfirst($blog->created_by)  }}</li>
                            <li><i class="far fa-calendar-alt"></i> {{ App\Helpers\GeneralHelper::dateFormat($blog->date) }}</li>
                        </ul>
                        <p>{{ $blog->content }}</p>
                        <a class="read-more-text" href="#">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 col-md-12 text-center mt-4">
                <a href="{{route('blog')}}" target="_blank"><button type="button" class="btn btn-base">Read More</button></a>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->



<!-- faq area start -->
<div class="faq-area pd-top-50 pd-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pe-xl-12 align-self-center">
                <div class="section-title mb-0">
                    <h5 class="sub-title left-border">Faq</h5>
                    <h2 class="title">Know more about solution</h2>
                </div>
            </div>

            <div class="col-lg-6 pe-xl-5 align-self-center">

                <div class="accordion mt-4" id="accordionExample">
                    <div class="accordion-item single-accordion-inner style-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What services does Prakhar Softwares Solutions offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We specialize in web development, software solutions, and digital marketing. Our services are designed to cater to businesses looking to enhance their digital footprint.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item single-accordion-inner style-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How can I get a quote for my project?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can request a quote by filling out the contact form on our website or by calling us directly at our provided contact numbers. We will respond with a customized proposal tailored to your project needs.
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item single-accordion-inner style-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is the typical turnaround time for a project?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The timeline for a project depends on its scope and complexity. However, we typically deliver web development projects within 4-6 weeks. Contact us for a more precise timeline based on your specific requirements.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item single-accordion-inner style-2">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Does Prakhar Softwares Solutions offer post-launch support?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we offer comprehensive post-launch support and maintenance services to ensure your application runs smoothly and remains updated with the latest technologies.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item single-accordion-inner style-2">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can Prakhar Softwares Solutions help with both design and development?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Absolutely! Our team is equipped to handle both design and development aspects of your project, ensuring a cohesive and functional end product.
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="accordion-item single-accordion-inner style-2">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            What makes Prakhar Softwares Solutions different from other software companies?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Our commitment to quality, our customer-centric approach, and our innovative solutions set us apart. We believe in building partnerships, not just client relationships.
                        </div>
                    </div>
                </div>


                <div class="accordion-item single-accordion-inner style-2">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Is my data safe with Prakhar Softwares Solutions?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, data security is a top priority for us. We use advanced security measures to protect your data and ensure confidentiality throughout the project lifecycle.
                        </div>
                    </div>
                </div>



                <div class="accordion-item single-accordion-inner style-2">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Does Prakhar Softwares Solutions provide training for the software and websites they develop?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, we provide necessary training and documentation to help you manage and navigate your new software or website effectively.
                        </div>
                    </div>
                </div>


                <div class="accordion-item single-accordion-inner style-2">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            How does Prakhar Softwares Solutions ensure project quality?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We follow a rigorous quality assurance process that includes multiple testing phases and peer reviews to ensure that the final product meets our high standards and your expectations.
                        </div>
                    </div>
                </div>


                <div class="accordion-item single-accordion-inner style-2">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            Who will be working on my project?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your project will be handled by a dedicated team of experienced developers, designers, and project managers who specialize in providing cutting-edge software solutions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq area end -->


<!-- client-area area end -->





<section class="container desktop_view">
    <div class="section-title text-center mb-5">
        <div class="text text-center">
            <h5 class="sub-title double-line">Prakhar Softwares Client's</h5>
            <h2 class="title">Below are some of our buisness partners</h2>
        </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide mb-10" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo10.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo11.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo12.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo13.png') }}" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo14.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo15.png') }}" class="d-block " alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo16.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo17.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>

            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo18.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo19.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo2.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo20.png') }}" class="d-block " alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo21.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo22.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo23.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo24.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo28.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo25.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo26.png') }}" class="d-block " alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo27.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo30.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo29.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo3.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo30.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>


            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo28.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo29.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo3.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo35.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo32.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo33.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo34.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo40.png') }}" class="d-block" alt="...">
                        </div>
                    </div>



                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">


                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo36.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo37.png') }}" class="d-block " alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo38.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo41.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo42.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo43.png') }}" class="d-block " alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo44.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo48.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>
            </div>


            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo45.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo46.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo47.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo52.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo49.png') }}" class="d-block " alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo5.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo51.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo56.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo53.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo54.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo55.png') }}" class="d-block " alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo6.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo57.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo58.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo59.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo60.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo7.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo8.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo9.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo60.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="container mobile_view">
    <div class="section-title text-center mb-5">
        <div class="text text-center">
            <h5 class="sub-title double-line">Prakhar Softwares Client's</h5>
            <h2 class="title">Below are some of our buisness partners</h2>
        </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide mb-10" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-md-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo10.png') }}" alt="...">
                        </div>
                    </div>
                </div>
            </div>



            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo14.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo18.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo21.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo28.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo30.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>


            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo28.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo32.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo33.png') }}" class="d-block" alt="...">
                        </div>
                    </div>



                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">


                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo36.png') }}" class="d-block" alt="...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo42.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>
            </div>


            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo45.png') }}" class="d-block" alt="...">
                        </div>
                    </div>


                </div>
            </div>



            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo49.png') }}" class="d-block " alt="...">
                        </div>
                    </div>

                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">

                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo53.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo57.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                    <div class="col-md-3 col-12 p-2">
                        <div class="card">
                            <img src="{{asset('assets/images/ourclientlogo/logo7.png') }}" class="d-block" alt="...">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



<!--modal for contacts-->



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="p-4">
                                    <h3 class="text-center">Contact Us </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2 text-right">
                        <div class="p-4">
                            <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                    </div>


                </div>

            </div>
            <div class="modal-body">
                <form class="contact-form-wrap" method="post" id="contact-form">
                    @csrf
                    <div>
                        <div class="row">
                            <div class="col-md-12">
                                <lablel>Name</lablel>
                                <div class="single-input-inner style-bg">
                                    <input type="text" name="name" id="name" placeholder="Enter Full Name">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <lablel>Email</lablel>
                                <div class="single-input-inner style-bg">
                                    <input type="text" name="email" id="email" placeholder="Enter Email Address">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <lablel>Mobile</lablel>
                                <div class="single-input-inner style-bg">
                                    <input type="text" name="mobile" id="mobile" placeholder="Enter Contact No.">
                                    <input type="hidden" name="subject" id="subject" value="Contact Us From Home">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <lablel>Message</lablel>
                                <div class="single-input-inner style-bg">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="btn-wrap text-center">
                            <button type="button" id="submitForm" class="btn btn-base">Submit Now</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });

    $(document).ready(function() {
        $('#submitForm').on('click', function(e) {
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            var validRegex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;


            if (name == '') {
                alert('Name field is required');
                return;
            }

            if (!/^[a-zA-Z]+$/.test(name)) {
                alert('Name field should only contain alphabetic characters');
                return;
            }

            if (email.trim() == '') {
                alert('Email field is required');
                return;
            }

            if (!email.match(validRegex)) {
                alert("Invalid email address!");
                return;
            }

            if (mobile.trim() == '') {
                alert('Mobile field is required');
                return;
            }

            if (subject.trim() == '') {
                alert('Subject field is required');
                return;
            }

            if (message.trim() == '') {
                alert('Message field is required');
                return;
            }

            $.ajax({
                type: "POST"
                , url: "{{ route('submitContact') }}"
                , data: {
                    _token: "{{ csrf_token() }}"
                    , name: name
                    , email: email
                    , mobile: mobile
                    , subject: subject
                    , message: message
                }
                , success: function(response) {
                    alert(response.message);
                    $('#name').val('');
                    $('#email').val('');
                    $('#mobile').val('');
                    $('#subject').val('');
                    $('#message').val('');
                }
                , error: function(error) {
                    alert(error.responseText);
                }
            });
        });
    });

    $('#event-tab').click(function() {
        $('#event').show();
        $('#profile').hide();

    });

    $('#profile-tab').click(function() {
        $('#event').hide();
        $('#profile').show();
    })

</script>
@endsection


<!-- client-area area end -->
