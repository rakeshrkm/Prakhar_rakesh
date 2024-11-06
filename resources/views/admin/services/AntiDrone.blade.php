@extends('layouts.admin.master')
@section('css')
@endsection
@section('content')

{{-- <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>

<div class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div> --}}

<div class="card w-100">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add / Update</h5>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')  }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-warning">
                {{  session('error') }}
            </div>
        @endif
        <div class="container">
            <form action="{{ route('admin.anti-drone.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12"  id="heading-color">
                        <h5 class="text-white">Meta Information</h5>
                    </div>     
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Meta title</label>
                        <input type="text" name="meta_title" class="form-control" id="" value="{{ !empty($antiDrone->meta_title) ? $antiDrone->meta_title : old('meta_title') }}" placeholder="Enter meta title">
                        <input type="hidden" name="id" value="{{ !empty($antiDrone->id) ?   $antiDrone->id : '' }}"/>
                        @if($errors->has('meta_title'))
                            <div class="text-danger error">{{ $errors->first('meta_title') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" id="" value="{{ !empty($antiDrone->meta_keywords) ? $antiDrone->meta_keywords : old('meta_keywords') }}" placeholder="Enter meta keywords">
                        @if($errors->has('meta_keywords'))
                            <div class="text-danger error">{{ $errors->first('meta_keywords') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Meta Description</label>
                        <input type="text" name="meta_descriptions" class="form-control" id="" value="{{ !empty($antiDrone->meta_descriptions) ? $antiDrone->meta_descriptions : old('meta_descriptions') }}" placeholder="Enter meta description">
                        @if($errors->has('meta_descriptions'))
                            <div class="text-danger error">{{ $errors->first('meta_descriptions') }}</div>
                        @endif
                    </div>   
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12"  id="heading-color">
                        <h5 class="text-white">About Information</h5>
                    </div>     
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 1</label>
                        <input type="text" name="heading_1" class="form-control" id="" value="{{ !empty($antiDrone->heading_1) ? $antiDrone->heading_1 : old('heading_1') }}" placeholder="Enter title">
                        <input type="hidden" name="id" value="{{ !empty($antiDrone->id) ?   $antiDrone->id : '' }}"/>
                        @if($errors->has('heading_1'))
                            <div class="text-danger error">{{ $errors->first('heading_1') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 1</label>
                        <textarea type="text" name="content_1" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->content_1) ? $antiDrone->content_1 : old('content_1') }}</textarea>
                        @if($errors->has('content_1'))
                            <div class="text-danger error">{{ $errors->first('content_1') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 2</label>
                        <input type="text" name="heading_2" class="form-control" id="" value="{{ !empty($antiDrone->heading_2) ? $antiDrone->heading_2 : old('heading_2') }}" placeholder="Enter title">
                        @if($errors->has('heading_2'))
                            <div class="text-danger error">{{ $errors->first('heading_2') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 2</label>
                        <textarea type="text" name="content_2" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->content_2) ? $antiDrone->content_2 : old('content_2') }} </textarea>
                        @if($errors->has('content_2'))
                            <div class="text-danger error">{{ $errors->first('content_2') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 3</label>
                        <input type="text" name="heading_3" class="form-control" id="" value="{{ !empty($antiDrone->heading_3) ? $antiDrone->heading_3 : old('heading_3') }}" placeholder="Enter Heading 3">
                        @if($errors->has('heading_3'))
                            <div class="text-danger error">{{ $errors->first('heading_3') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 3</label>
                        <textarea type="text" name="content_3" class="form-control" placeholder="Enter content 3"> {{ !empty($antiDrone->content_3) ? $antiDrone->content_3 : old('content_3') }} </textarea>
                        @if($errors->has('content_3'))
                            <div class="text-danger error">{{ $errors->first('content_3') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Anti Drone Image <sup class="text-danger"> * </sup></label>
                        <input type="file" name="anti_drone_image" class="form-control">
                        @if(!empty($antiDrone->anti_drone_image))
                        <img class="mt-2" src="{{asset('uploads/services/'.$antiDrone->anti_drone_image)}}" height="80"  width="80"  />
                        @endif
                    </div>
                </div>
                
                <!--key benefits-->
                
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12"  id="heading-color">
                        <h5 class="text-white">Key Benefits</h5>
                    </div>     
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="key_benefit_title" class="form-control" id="" value="{{ !empty($antiDrone->key_benefit_title) ? $antiDrone->key_benefit_title : old('key_benefit_title') }}" placeholder="Enter title">
                        @if($errors->has('key_benefit_title'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_title') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 1</label>
                        <input type="text" name="key_benefit_heading_1" class="form-control" id="" value="{{ !empty($antiDrone->key_benefit_heading_1) ? $antiDrone->key_benefit_heading_1 : old('key_benefit_heading_1') }}" placeholder="Enter title">
                        @if($errors->has('key_benefit_heading_1'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_heading_1') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 1</label>
                        <textarea type="text" name="key_benefit_content_1" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->key_benefit_content_1) ? $antiDrone->key_benefit_content_1 : old('key_benefit_content_1') }}  </textarea>
                        @if($errors->has('key_benefit_content_1'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_content_1') }}</div>
                        @endif
                    </div>
                      
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 2</label>
                        <input type="text" name="key_benefit_heading_2" class="form-control" id="" value="{{ !empty($antiDrone->key_benefit_heading_2) ? $antiDrone->key_benefit_heading_2 : old('key_benefit_heading_2') }}" placeholder="Enter title">
                        @if($errors->has('key_benefit_heading_2'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_heading_2') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 2</label>
                        <textarea type="text" name="key_benefit_content_2" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->key_benefit_content_2) ? $antiDrone->key_benefit_content_2 : old('key_benefit_content_2') }} </textarea>
                        @if($errors->has('key_benefit_content_2'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_content_2') }}</div>
                        @endif
                    </div>  
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 3</label>
                        <input type="text" name="key_benefit_heading_3" class="form-control" id="" value="{{ !empty($antiDrone->key_benefit_heading_3) ? $antiDrone->key_benefit_heading_3 : old('key_benefit_heading_3') }}" placeholder="Enter Heading 3">
                        @if($errors->has('key_benefit_heading_3'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_heading_3') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 3</label>
                        <textarea type="text" name="key_benefit_content_3" class="form-control" placeholder="Enter content 3"> {{ !empty($antiDrone->key_benefit_content_3) ? $antiDrone->key_benefit_content_3 : old('key_benefit_content_3') }} </textarea>
                        @if($errors->has('key_benefit_content_3'))
                                <div class="text-danger error">{{ $errors->first('key_benefit_content_3') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 4</label>
                        <input type="text" name="key_benefit_heading_4" class="form-control" id="" value="{{ !empty($antiDrone->key_benefit_heading_4) ? $antiDrone->key_benefit_heading_4 : old('key_benefit_heading_4') }}" placeholder="Enter  Heading 4">
                        @if($errors->has('key_benefit_heading_4'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_heading_4') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 4</label>
                        <textarea type="text" name="key_benefit_content_4" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->key_benefit_content_4) ? $antiDrone->key_benefit_content_4 : old('key_benefit_content_4') }}</textarea>
                        @if($errors->has('key_benefit_content_4'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_content_4') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 5</label>
                        <input type="text" name="key_benefit_heading_5" class="form-control" id="" value="{{ !empty($antiDrone->key_benefit_heading_5) ? $antiDrone->key_benefit_heading_5 : old('key_benefit_heading_5') }}" placeholder="Enter Heading 5">
                        @if($errors->has('key_benefit_heading_5'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_heading_5') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 5</label>
                        <textarea type="text" name="key_benefit_content_5" class="form-control" placeholder="Enter content 5"> {{ !empty($antiDrone->key_benefit_content_5) ? $antiDrone->key_benefit_content_5 : old('key_benefit_content_5') }} </textarea>
                        @if($errors->has('key_benefit_content_5'))
                            <div class="text-danger error">{{ $errors->first('key_benefit_content_5') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row card">
                    <div class="mb-2 mt-2 col-md-12" id="heading-color">
                        <h5 class="text-white">Why Choose Us</h5>
                    </div>     
                </div>
                
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="choose_us_title" class="form-control" id="" value="{{ !empty($antiDrone->choose_us_title) ? $antiDrone->choose_us_title : old('choose_us_title') }}" placeholder="Enter title">
                        @if($errors->has('choose_us_title'))
                            <div class="text-danger error">{{ $errors->first('choose_us_title') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Heading 1</label>
                        <input type="text" name="choose_us_heading_1" class="form-control" id="" value="{{ !empty($antiDrone->choose_us_heading_1) ? $antiDrone->choose_us_heading_1 : old('choose_us_heading_1') }}" placeholder="Enter Heading 1">
                        @if($errors->has('choose_us_heading_1'))
                            <div class="text-danger error">{{ $errors->first('choose_us_heading_1') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 1</label>
                        <textarea type="text" name="choose_us_content_1" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->choose_us_content_1) ? $antiDrone->choose_us_content_1 : old('choose_us_content_1') }} </textarea>
                        @if($errors->has('choose_us_content_1'))
                            <div class="text-danger error">{{ $errors->first('choose_us_content_1') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 1.2</label>
                        <textarea type="text" name="choose_us_content_1_2" class="form-control" placeholder="Enter blog content"> {{ !empty($antiDrone->choose_us_content_1_2) ? $antiDrone->choose_us_content_1_2 : old('choose_us_content_1_2') }} </textarea>
                        @if($errors->has('choose_us_content_1_2'))
                            <div class="text-danger error">{{ $errors->first('choose_us_content_1_2') }}</div>
                        @endif
                    </div>
                      
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Heading 2</label>
                        <input type="text" name="choose_us_heading_2" class="form-control" id="" value="{{ !empty($antiDrone->choose_us_heading_2) ? $antiDrone->choose_us_heading_2 : old('choose_us_heading_2') }}" placeholder="Enter Heading 2">
                        @if($errors->has('choose_us_heading_2'))
                            <div class="text-danger error">{{ $errors->first('choose_us_heading_2') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 2</label>
                        <textarea type="text" name="choose_us_content_2" class="form-control" placeholder="Enter blog content">{{ !empty($antiDrone->choose_us_content_2) ? $antiDrone->choose_us_content_2 : old('choose_us_content_2') }}</textarea>
                        @if($errors->has('choose_us_content_2'))
                            <div class="text-danger error">{{ $errors->first('choose_us_content_2') }}</div>
                        @endif
                    </div>  
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 2.2</label>
                        <textarea type="text" name="choose_us_content_2_2" class="form-control" placeholder="Enter content"> {{ !empty($antiDrone->choose_us_content_2_2) ? $antiDrone->choose_us_content_2_2 : old('choose_us_content_2_2') }} </textarea>
                        @if($errors->has('choose_us_content_2_2'))
                            <div class="text-danger error">{{ $errors->first('choose_us_content_2_2') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Heading 3</label>
                        <input type="text" name="choose_us_heading_3" class="form-control" id="" value="{{ !empty($antiDrone->choose_us_heading_3) ? $antiDrone->choose_us_heading_3 : old('choose_us_heading_3') }}" placeholder="Enter Heading 3">
                        @if($errors->has('choose_us_heading_3'))
                            <div class="text-danger error">{{ $errors->first('choose_us_heading_3') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 3</label>
                        <textarea type="text" name="choose_us_content_3" class="form-control" placeholder="Enter content 3"> {{ !empty($antiDrone->choose_us_content_3) ? $antiDrone->choose_us_content_3 : old('choose_us_content_3') }} </textarea>
                        @if($errors->has('choose_us_content_3'))
                                <div class="text-danger error">{{ $errors->first('choose_us_content_3') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 3.2</label>
                        <textarea type="text" name="choose_us_content_3_2" class="form-control" placeholder="Enter content"> {{ !empty($antiDrone->choose_us_content_3_2) ? $antiDrone->choose_us_content_3_2 : old('choose_us_content_3_2') }} </textarea>
                        @if($errors->has('choose_us_content_3_2'))
                            <div class="text-danger error">{{ $errors->first('choose_us_content_3_2') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12"  id="heading-color">
                        <h5 class="text-white">Faqs</h5>
                    </div>     
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="faq_title" class="form-control" id="" value="{{ !empty($antiDrone->faq_title) ? $antiDrone->faq_title : old('faq_title') }}" placeholder="Enter title">
                        @if($errors->has('faq_title'))
                            <div class="text-danger error">{{ $errors->first('faq_title') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 1</label>
                        <input type="text" name="faq_heading_1" class="form-control" id="" value="{{ !empty($antiDrone->faq_heading_1) ? $antiDrone->faq_heading_1 : old('faq_heading_1') }}" placeholder="Enter Heading 1">
                        @if($errors->has('faq_heading_1'))
                            <div class="text-danger error">{{ $errors->first('faq_heading_1') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 1</label>
                        <textarea type="text" name="faq_content_1" class="form-control" placeholder="Enter content"> {{ !empty($antiDrone->faq_content_1) ? $antiDrone->faq_content_1 : old('faq_content_1') }} </textarea>
                        @if($errors->has('faq_content_1'))
                            <div class="text-danger error">{{ $errors->first('faq_content_1') }}</div>
                        @endif
                    </div>
                      
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 2</label>
                        <input type="text" name="faq_heading_2" class="form-control" id="" value="{{ !empty($antiDrone->faq_heading_2) ? $antiDrone->faq_heading_2 : old('faq_heading_2') }}" placeholder="Enter Heading 2">
                        @if($errors->has('faq_heading_2'))
                            <div class="text-danger error">{{ $errors->first('faq_heading_2') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 2</label>
                        <textarea type="text" name="faq_content_2" class="form-control" placeholder="Enter content"> {{ !empty($antiDrone->faq_content_2) ? $antiDrone->faq_content_2 : old('faq_content_2') }} </textarea>
                        @if($errors->has('faq_content_2'))
                            <div class="text-danger error">{{ $errors->first('faq_content_2') }}</div>
                        @endif
                    </div>  
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 3</label>
                        <input type="text" name="faq_heading_3" class="form-control" id="" value="{{ !empty($antiDrone->faq_heading_3) ? $antiDrone->faq_heading_3 : old('faq_heading_3') }}" placeholder="Enter Heading 3">
                        @if($errors->has('faq_heading_3'))
                            <div class="text-danger error">{{ $errors->first('faq_heading_3') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 3</label>
                        <textarea type="text" name="faq_content_3" class="form-control" placeholder="Enter content 3">{{ !empty($antiDrone->faq_content_3) ? $antiDrone->faq_content_3 : old('faq_content_3') }}</textarea>
                        @if($errors->has('faq_content_3'))
                                <div class="text-danger error">{{ $errors->first('faq_content_3') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 4</label>
                        <input type="text" name="faq_heading_4" class="form-control" id="" value="{{ !empty($antiDrone->faq_heading_4) ? $antiDrone->faq_heading_4 : old('faq_heading_4') }}" placeholder="Enter  Heading 4">
                        @if($errors->has('faq_heading_4'))
                            <div class="text-danger error">{{ $errors->first('faq_heading_4') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 4</label>
                        <textarea type="text" name="faq_content_4" class="form-control" placeholder="Enter content">{{ !empty($antiDrone->faq_content_4) ? $antiDrone->faq_content_4 : old('faq_content_4') }}</textarea>
                        @if($errors->has('faq_content_4'))
                            <div class="text-danger error">{{ $errors->first('faq_content_4') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 5</label>
                        <input type="text" name="faq_heading_5" class="form-control" id="" value="{{ !empty($antiDrone->faq_heading_5) ? $antiDrone->faq_heading_5 : old('faq_heading_5') }}" placeholder="Enter  Heading 5">
                        @if($errors->has('faq_heading_5'))
                            <div class="text-danger error">{{ $errors->first('faq_heading_5') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 5</label>
                        <textarea type="text" name="faq_content_5" class="form-control" placeholder="Enter content">{{ !empty($antiDrone->faq_content_5) ? $antiDrone->faq_content_5 : old('faq_content_5') }}</textarea>
                        @if($errors->has('faq_content_5'))
                            <div class="text-danger error">{{ $errors->first('faq_content_5') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Heading 6</label>
                        <input type="text" name="faq_heading_6" class="form-control" id="" value="{{ !empty($antiDrone->faq_heading_6) ? $antiDrone->faq_heading_6 : old('faq_heading_6') }}" placeholder="Enter  Heading 6">
                        @if($errors->has('faq_heading_6'))
                            <div class="text-danger error">{{ $errors->first('faq_heading_6') }}</div>
                        @endif
                    </div>   
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Content 6</label>
                        <textarea type="text" name="faq_content_6" class="form-control" placeholder="Enter content"> {{ !empty($antiDrone->faq_content_6) ? $antiDrone->faq_content_6 : old('faq_content_5') }} </textarea>
                        @if($errors->has('faq_content_6'))
                            <div class="text-danger error">{{ $errors->first('faq_content_6') }}</div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Faq Image <sup class="text-danger"> * </sup></label>
                        <input type="file" name="anti_drone_faq_image" class="form-control">
                        @if(!empty($antiDrone->anti_drone_faq_image))
                            <img class="mt-2" src="{{asset('uploads/services/'.$antiDrone->anti_drone_faq_image)}}" height="80"  width="80"  />
                        @endif
                    </div>
                    
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Banner Image <sup class="text-danger"> * </sup></label>
                        <input type="file" name="banner_image" class="form-control">
                        @if(!empty($antiDrone->banner_image))
                            <img class="mt-2" src="{{asset('uploads/banner/'.$antiDrone->banner_image)}}" height="80"  width="80"  />
                        @endif
                    </div>
                    
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="">-- Select Status --</option>
                            <option value="active" selected>Active</option>
                            <option value="inactive">In Active</option>
                        </select>
                        @if($errors->has('status'))
                            <div class="text-danger error">{{ $errors->first('status') }}</div>
                        @endif
                    </div>  
                    
                    <div class="btn-wrap mb-3 mt-3">
                        <button type="submit" class="btn btn-base float-end">Submit</button>
                    </div>
                                
                        <!--<input type="submit" class="btn btn-success mt-3 float-end" value="SUBMIT" />-->
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')

<script type="text/javascript">
  $('#suggestion').summernote({
      height: 400
  });
</script>
@endsection