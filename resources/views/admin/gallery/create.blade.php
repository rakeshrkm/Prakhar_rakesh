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
      <h5 class="card-title fw-semibold mb-4">Blog Gallery</h5>

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
         <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="mb-3 col-md-12">
          <label for="" class="form-label">Category</label>
            <select name="category" class="form-control">
                  <option value="">-- Select Status --</option>
                  <option value="service">Service</option>
                  <option value="achievements">Achievements</option>
                  <option value="events">events</option>
              </select>
              @if($errors->has('status'))
                      <div class="text-danger error">{{ $errors->first('status') }}</div>
              @endif
          </div>     
          <div class="mb-3 col-md-12">
            <label for="" class="form-label">Gallery Image </label>
            <input type="file" name="image" class="form-control">
          </div>  
          <div class="mb-3 col-md-12">
            <label for="" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="">-- Select Status --</option>
                <option value="active">Active</option>
                <option value="inactive">In Active</option>
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