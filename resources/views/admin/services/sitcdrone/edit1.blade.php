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
      <h5 class="card-title fw-semibold mb-4">Update SITC Drone</h5>

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
         <form action="{{ route('admin.sitc-drone.update', $sitDrone->id) }}" method="post" enctype="multipart/form-data">
             @csrf
             @method('PUT')
        <div class="row">
           <div class="mb-3 col-md-6">
            <label for="" class="form-label">Heading 1</label>
            <input type="text" name="heading_1" class="form-control" id="" value="{{ $sitDrone->heading_1 }}" placeholder="Enter title">
            @if($errors->has('heading_1'))
                    <div class="text-danger error">{{ $errors->first('heading_1') }}</div>
            @endif
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Content 1</label>
            <textarea type="text" name="content_1" class="form-control" placeholder="Enter blog content">  {{ $sitDrone->content_1 }} </textarea>
            @if($errors->has('content_1'))
                    <div class="text-danger error">{{ $errors->first('content_1') }}</div>
            @endif
          </div>
          
           <div class="mb-3 col-md-6">
            <label for="" class="form-label">Heading 2</label>
            <input type="text" name="heading_2" class="form-control" id="" value="{{ $sitDrone->heading_2 }}" placeholder="Enter title">
            @if($errors->has('heading_2'))
                    <div class="text-danger error">{{ $errors->first('heading_2') }}</div>
            @endif
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Content 2</label>
            <textarea type="text" name="content_2" class="form-control" placeholder="Enter blog content"> {{ $sitDrone->content_2 }}</textarea>
            @if($errors->has('content_2'))
                    <div class="text-danger error">{{ $errors->first('content_2') }}</div>
            @endif
          </div>
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Heading 3</label>
            <input type="text" name="heading_3" class="form-control" id="" value="{{ $sitDrone->heading_3 }}" placeholder="Enter Heading 3">
            @if($errors->has('heading_3'))
                    <div class="text-danger error">{{ $errors->first('heading_3') }}</div>
            @endif
        </div>   
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Content 3</label>
            <textarea type="text" name="content_3" class="form-control" placeholder="Enter content 3"> {{ $sitDrone->content_3 }} </textarea>
            @if($errors->has('content_3'))
                    <div class="text-danger error">{{ $errors->first('content_3') }}</div>
            @endif
        </div>
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">SITC Drone Image </label>
            <input type="file" name="sitc_image_sec_1" class="form-control">
            <img class="mt-2" src="{{ asset('uploads/services/'.$sitDrone->sitc_image_sec_1) }}" height="80" width="80" />
          </div>  
          <div class="mb-3 col-md-12">
              
            <label for="" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="">-- Select Status --</option>
                <option value="active" {{ $sitDrone->status == App\Helpers\ConstantHelper::ACTIVE ? 'selected' : '' }} >Active</option>
                <option value="inactive" {{ $sitDrone->status == App\Helpers\ConstantHelper::INACTIVE ? 'selected' : '' }}>In Active</option>
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