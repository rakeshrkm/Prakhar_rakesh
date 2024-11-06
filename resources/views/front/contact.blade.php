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
                        <h2 class="page-title">Contact</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- team area start -->
    <div class="team-area info-box-two pd-top-115 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <h5 class="sub-title double-line">Contact</h5>
                        <h2 class="title">Get in touch</h2>
                        <p class="content"></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--<div class="row">-->
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-contact-inner text-center card">
                                <div class="icon-box">
                                    <i class="icomoon-pin"></i>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h3>Office address</h3>
                                        <p>C – 11, LGF, Opp. State Bank of India, Malviya Nagar, New Delhi-110017 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-contact-inner text-center card">
                                <div class="icon-box">
                                    <i class=" icomoon-email"></i>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h3>Email Address</h3>
                                        <p><a href="https://solverwp.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e3909693938c9197a3848e828a8fcd808c8e">info@prakharsoftwares.com</a> <br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="single-contact-inner text-center card">
                                <div class="icon-box">
                                    <i class=" icomoon-telephone"></i>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h3>Phone Number</h3>
                                        <p>+91 11 4010 4369 <br> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                      
                    </div>
                    <div class="col-md-6 col-lg-6 ">
                            <form class="contact-form-wrap card" method="post" id="contact-form">
                                @csrf
                            <div class="consulting-contact-form mx-4">
                                <h3 class="mb-3">Contact Us </h3>
                                <div class="single-input-inner style-bg">
                                    <input type="text" name="name" id="name" placeholder="Enter Full Name">
                                </div>
                                <div class="single-input-inner style-bg">
                                    <input type="text" name="email" id="email" placeholder="Enter Email Address">
                                </div>
                                <div class="single-input-inner style-bg">
                                    <input type="text" name="mobile" id="mobile" placeholder="Enter Contact No.">
                                </div>
                                 <div class="single-input-inner style-bg">
                                    <input type="text" name="subject" id="subject" placeholder="Enter Subject">
                                </div>
                                <div class="single-input-inner style-bg style="height: 180px;">
                                    <textarea name="message" id="message" placeholder="Message" style="height: 138px;" ></textarea>
                                </div>
                                <div class="btn-wrap mb-3 mt-3">
                                    <button type="button" id="submitForm" class="btn btn-base text-center">Submit Now</button>
                                </div>
                               
                            </div>
                        </form>
                        
                    </div>
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- team area end -->
    
    
    <div class=" row">
        <div class="col-md-8">
             <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.1426525698803!2d77.21302071455732!3d28.535431645220967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1f700000001%3A0x68dca73f09d47c81!2sPrakhar%20Software%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1580276051518!5m2!1sen!2sin"
            width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-4">
             <img src="{{ asset('assets/img/contact/map.jpg') }}" alt="offices" width="100%" height="550">
        </div>
    </div>

    <!-- footer area start -->
    <!-- footer area end -->
    <!-- ack to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@endsection
@section('scripts')
<script>
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
            type: "POST",
            url: "{{ route('submitContact') }}",
            data: {
                _token: "{{ csrf_token() }}",
                name: name,
                email: email,
                mobile: mobile,
                subject: subject,
                message: message
            },
            success: function(response) {
                alert(response.message);
                $('#name').val('');
                $('#email').val('');
                $('#mobile').val('');
                $('#subject').val('');
                $('#message').val('');
            },
            error: function(error) {
                alert(error.responseText);
            }
        });
    });
});
</script>
@endsection