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
                        <h2 class="page-title">Events - Gallery</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Events Gallery</li>
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
                        <h5 class="sub-title double-line">Events Gallery </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area info-box-two pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($data['gallery_events'] as $data)
                <div class="col-lg-4 col-md-4">
                    <div class="images-area mt-2">
                        <a href="{{ asset('uploads/gallery/'.$data->images) }}" target="_blank" rel="prettyPhoto[gallery1]">
                            <img src="{{ asset('uploads/gallery/'.$data->images) }}" width="100%" height="auto" alt="Nice building" class="img-fluid" />
                        </a>    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
   
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
@endsection