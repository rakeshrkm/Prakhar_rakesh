@extends('layouts.front.master', ['title' => 'Career', 'keyword' => 'Career','description' => 'Career' ])

@section('content')

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img/bg/1.webp');"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="breadcrumb-inner text-center">
                            <h2 class="page-title">Career</h2>
                            <ul class="page-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Career</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- page title end -->

    <!-- project area start -->
    <section class="project-area pd-top-50 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="isotope-filters project-isotope-btn text-center">    
                        <h2 class="text-center">Current openings</h2>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="isotope-filters project-isotope-btn text-center mb-5">
 
                        <div class="tab-content" id="myTabContent">
                            <!--<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">-->
                            <!--    <p class="content mt-4"></p>-->
                            <!--    <div class="list-wrap mt-4">-->
                            <!--    <div class="container">-->
                            <!--            <div class="section-title text text-center">-->
                            <!--                <h5 class="sub-title left-border">Our Products</h5>-->
                            <!--                <h3>Range of our products includes, but not limited to:-->
                            <!--                </h3>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                                            
                                            
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/caryzone.png') }}"  class="carrier_img" alt="img">-->

                            <!--                        <div class="details">-->
                            <!--                            <h3>Caryzon</h3> -->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Caryzon</h3> -->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            
                                            
                                            
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                             <img src="{{ asset('assets/img/our-products/crazy eyeware.png') }}" class="carrier_img"  alt="img">-->
                                                    
                            <!--                        <div class="details">-->
                            <!--                            <h3>Crazy Eyeware</h3>-->
                            <!--                            <p>Naukriyan.com is our owned and one of the finest job portal that carries most of e-governance jobs from various government Departments, Ministries and public sector Units across India</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Crazy Eyeware</h3>-->
                            <!--                            <p>Naukriyan.com is our owned and one of the finest job portal that carries most of e-governance jobs from various government Departments, Ministries and public sector Units across India</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="https://naukriyan.com/" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                       <img src="{{ asset('assets/img/our-products/d-tras.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>D-TRAS (Drone Threat Rating Application System)</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                           <h3>D-TRAS (Drone Threat Rating Application System)</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                           
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/gravity.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Gravity International</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                               <h3>Gravity International</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                 <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/green fortune.png') }}" class="carrier_img"   alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Green Fortune Industries Pvt. Ltd.</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Green Fortune Industries Pvt. Ltd.</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/guftgu.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Naukriyan Guftgu</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                             <h3>Naukriyan Guftgu</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/iba.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>International Bamboo Association</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                              <h3>International Bamboo Association</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/Namdeo food & Beverages.png') }}" class="carrier_img" alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Namdeo Food & Beverages Pvt. Ltd.</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                              <h3>Namdeo Food & Beverages Pvt. Ltd.</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/naukriyan.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Naukriyan</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Naukriyan</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/ndgc.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>E-Gov Technoventures Ltd.</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                           <h3>E-Gov Technoventures Ltd.</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/pcg.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Prakhar Consulting Group</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Prakhar Consulting Group</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/prakhar aviation.png') }}" class="carrier_img"   alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Prakhar Aviation Technologies Pvt. Ltd. </h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                             <h3>Prakhar Aviation Technologies Pvt. Ltd. </h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/WhatsApp Image 2024-05-31 at 5.23.54 PM.jpeg') }}"class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Namdeo Matrimony</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                          <h3>Namdeo Matrimony</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/prayank eyeware.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Prayank Eyeware & Healthcare</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                               <h3>Prayank Eyeware & Healthcare</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/prayank technology & healthcare-1.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Prayank Technology and Healthcare Private Limited</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Prayank Technology and Healthcare Private Limited</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/uav edutech.png') }}" class="carrier_img"  alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>UAV Edutech & Research Foundation</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>UAV Edutech & Research Foundation</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-lg-4 col-md-6">-->
                            <!--                    <div class="single-service-inner text-center career_div_height">-->
                            <!--                        <img src="{{ asset('assets/img/our-products/wrapmygift.png') }}" class="carrier_img" alt="img">-->
                            <!--                        <div class="details">-->
                            <!--                            <h3>Wrap My Gift</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="details-hover-wrap">-->
                            <!--                            <div class="details-hover">-->
                            <!--                            <h3>Wrap My Gift</h3>-->
                            <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                            <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            
                                           
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!--<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                            <!--    <p class="content mt-4"></p>-->
                            <!--    <div class="list-wrap mt-4">-->
                            <!--        <section class="counters2 counters visible">-->
                            <!--            <div class="container pt-4 mt-2">-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-12 col-sm-12">-->
                            <!--                        <div class="section-title text-cener">-->
                            <!--                            <h5 class="sub-title left-border">Our Achievements</h5>-->
                            <!--                            <h2>We thank you for giving us chance to present the following facts about our achievements:</h2>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="col-md-6 col-sm-6">-->
                            <!--                        <div class="text">-->
                            <!--                            <p class="pt-3">Our growth has taken place very rapidly in each and every field where we started to work. At the moment when our business was just an idea, we kept a clear approach to stay transparent, trustworthy and tenacious to achieve more.-->
                            <!--                                We started delivering the best services just after taking the first step. Today we have business spread all over India with not only the corporate clients, but also with various state/union government undertaking departments,-->
                            <!--                                Public Sector Units (PSU) and ministries. With our trend setting approach towards our fundamental scope of work, we have acquired sufficient and of course the relevant space in the industry. Due to which we are proud to have:-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="col-md-6 col-sm-6">-->
                            <!--                        <img src="{{ asset('assets/images/yelling-clipart-employment-law-6.png') }}" alt="achievements" class="img-fluid">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </section>   -->
                            <!--        <section class="px-5">-->
                            <!--        <div class="container mb-4 ">-->
                            <!--            <div class="section-title text-center">-->
                            <!--                <h5 class="sub-title left-border">Prakhar Softwares Certificates</h5>-->
                            <!--                <h2>Below are the latest certificates achieved by Prakhar-->
                            <!--                </h2>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="row justify-content-center"></div>-->
                            <!--    </section>                          -->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            {{-- <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab"> --}}
                                <div class="list-wrap mt-4" id="career_id">
                                


                                        
                                </div>
                            </div>
                            </div>
                        {{-- </div> --}}
                       
                    </div>
                </div>
            </div>
          
        </div>        
    </section>
    <!-- project area end -->


    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@section('scripts')
<script>
    //     var app = new Vue({
    //       el: '#app',
    //       data() {
    //         return {
    //             sectors: [],
    //             jobs: [],
    //             users: {},
    //             sec: []
    //         }
    //       },

    //       created() {
    //         this.getSector();
    //         this.getJobsBySectorId(1);
    //       },

    //       methods: {
    //        getSector() {
    //           let self = this;
    //           axios.get('https://naukriyan.com/getjobscategory/prakharsoftwares').then((response) => {
    //             this.sectors = response.data;
    //             $.each(response.data, function(key, value) {
    //               self.sec.push(value.job_sector);
    //             });
    //           });
    //         },

    // getJobsBySectorId(id) {
    //           axios
    //             .get("https://naukriyan.com/getjobs/prakharsoftwares", { params: { sector_id: +id } })
    //             .then((response) => {
    //                 console.log(response);
    //               this.jobs = response.data;
    //             });
    //         },

    //       }
    //     })

    $(document).ready(function() {
        $.ajax({
    type: 'GET',
    url: "https://naukriyan.com/getjobs/prakharsoftwares?sector_id=1",
    success: function(response) {
        console.log(response);

        var html = ``;
        $.each(response, function(index, job) {
            var exp = '';
            if(job.job_sector_id !== 3){
                var exp = job.job_exp;
            }
            if(job.job_sector_id === 3){
                var date = 'Last Apply date';
            }
            else{
                exp = 'Experience';
            }

            if(job.main_exp==='0' && job.max_exp==='0'){
                exp = 'Fresher';
            }

            if(job.job_sector_id === 3){
                exp = job.last_apply_date;
            }else{
                exp = job.main_exp +' Yr' ;
            }
            var cardHtml =`<div class="accordion-item single-accordion-inner style-2 single-acc">
                            <h2 class="accordion-header" id="headingThree${index}">
                                <button class="accordion-button collapsed career" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree${index}" aria-expanded="false" aria-controls="collapseThree${index}">
                                    ${job.title}
                                </button>
                            </h2>
                            <div id="collapseThree${index}" class="accordion-collapse collapse career-collapse" aria-labelledby="headingThree${index}"
                                data-bs-parent="#collapseThree${index}">
                                <div class="accordion-body">
                                <table class="table table-bordered table-hover dt-responsive table-striped user-table">
                                    <thead>
                                        <tr>
                                        <th>Location</th>
                                        <td></td> 
                                        <th>Experience</th>
                                        <td>${exp}</td>
                                        </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td colspan="3">${job.description}</td>
                                    </tr>
                                    </thead>
                                </table>
                                <a href="https://naukriyan.com/job_details/${job.id}" target="_blank" class="btn btn-block btn-primary ml-0">Apply for this job&nbsp; <i aria-hidden="true" class="far fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>`;
            html += cardHtml; 
        });
        $("#career_id").append(html);
    },
    error: function() {
            $("#career_id").append("<h1>Error fetching data</h1>");
        },
        complete: function() {
            
            $("#loader").hide();
        }
});

    });

    </script>

@endsection
@endsection
