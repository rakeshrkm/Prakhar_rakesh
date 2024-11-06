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
                        <h2 class="page-title">Our blog post</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach($data['blogs'] as $blog)
                       

                     
                            <div class="col-lg-4 col-md-4">
                                <div class="single-blog-inner card p-2">
                                    <div class="blog_image ">
                                        <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="img" width="100%" height="200px">
                                    </div>
                                    <div class="details">
                                        <h5  class="mt-2"><a href="#">{{ ucwords($blog->title) }}</a></h5>
                                        <ul class="blog-meta">
                                            <li><i class="far fa-user"></i> By {{ ucwords($blog->created_by) }}</li>
                                            <li><i class="far fa-calendar-alt"></i> {{ \App\Helpers\GeneralHelper::dateFormat($blog->date) }}</li>
                                        </ul>
                                    <p style="text-align:justify;">{{$blog->content}}</p>
                                        <a class="read-more-text" href="#">Read More <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> 

                    <span class="text-center">{{$data['blogs']->links()}}</span>
                   
                </div>
           
                <div class="col-md-3">
                    
                        <div class="td-sidebar">
                            <div class="widget widget_catagory">
                                <h4 class="widget-title">Catagory</h4>                                
                                <ul class="catagory-items">
                                    <li><a href="#">Digital marketing</a></li>
                                    <li><a href="#">Machine learning</a></li>
                                    <li><a href="#">It management</a></li>
                                    <li><a href="#">Loan & Insurance</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                        <li><a href="#">IT Consultancy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
    <!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@endsection