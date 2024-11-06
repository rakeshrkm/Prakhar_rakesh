@extends('layouts.admin.master')
@section('css')

  <style>
  </style>

@endsection
@section('content')

{{-- <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>

<div class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div> --}}

<div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Update About Us</h5>

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
         <form action="{{ route('admin.aboutus.update', $aboutUs->id) }}" method="post" enctype="multipart/form-data">
             @csrf
             @method('PUT')
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{ $aboutUs->title }}" placeholder="Enter title">
            @if($errors->has('title'))
                    <div class="text-danger error">{{ $errors->first('title') }}</div>
            @endif
          </div>   
           <div class="mb-3 col-md-12">
            <label for="" class="form-label">Heading</label>
            <input type="text" name="heading" class="form-control" id="" value="{{ $aboutUs->heading }}" placeholder="Enter title">
            @if($errors->has('heading'))
                    <div class="text-danger error">{{ $errors->first('heading') }}</div>
            @endif
          </div>   
          <div class="mb-3 col-md-12">
            <label for="" class="form-label">About Us Content</label>
            <textarea type="text" name="content" class="form-control" placeholder="Enter blog content">{{ $aboutUs->content }}</textarea>
            @if($errors->has('content'))
                    <div class="text-danger error">{{ $errors->first('content') }}</div>
            @endif
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">About Us Image 1</label>
            <input type="file" name="about_image_sec_1" class="form-control">
                <img class="mt-2" src="{{ asset('uploads/about/'.$aboutUs->about_image_sec_1) }}" height="80" width="80" />
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">About Us Image  2</label>
            <input type="file" name="about_image_sec_1_2" class="form-control">
            <img class="mt-2" src="{{ asset('uploads/about/'.$aboutUs->about_image_sec_1_2) }}" height="80" width="80" />
          </div>  
          <div class="mb-3 col-md-12">
              
            <label for="" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="">-- Select Status --</option>
                <option value="active" {{ $aboutUs->status == App\Helpers\ConstantHelper::ACTIVE ? 'selected' : '' }} >Active</option>
                <option value="inactive" {{ $aboutUs->status == App\Helpers\ConstantHelper::INACTIVE ? 'selected' : '' }}>In Active</option>
            </select>
            @if($errors->has('status'))
                    <div class="text-danger error">{{ $errors->first('status') }}</div>
            @endif
          </div>  
        </div>
        <input type="submit" class="btn btn-success mt-3 float-end" value="SUBMIT" />
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