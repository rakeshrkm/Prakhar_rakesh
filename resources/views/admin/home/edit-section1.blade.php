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
      <h5 class="card-title fw-semibold mb-4">Add First Section</h5>

      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @elseif(session('error'))
      <div class="alert alert-warning">
      {{  session('error') }}
      </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <form action="{{ url('add-section1') }}" method="post" enctype="multipart/form-data">
        @csrf
     
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{ $data->title }}">
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Heading</label>
            <input type="text" name="heading" class="form-control" id="" value="{{ $data->heading }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Second Heading</label>
            <input type="text" name="second_heading" class="form-control" id="" value="{{ $data->second_heading }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Content</label>
            <textarea name="content" id="" class="form-control"  rows="3"> {{ $data->content }}</textarea>
          </div>
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">First Box Heading</label>
            <input type="text" name="first_box_heading" class="form-control" id="" value="{{ $data->first_box_heading }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">First Box Content</label>
            <input type="text" name="first_box_content" class="form-control" id="" value="{{ $data->first_box_content }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Second Box Heading</label>
            <input type="text" name="second_box_heading" class="form-control" id="" value="{{ $data->second_box_heading }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Second Box Content</label>
            <input type="text" name="second_box_content" class="form-control" id="" value="{{ $data->second_box_content }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Third Box Heading</label>
            <input type="text" name="third_box_heading" class="form-control" id="" value="{{ $data->third_box_heading }}">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Third Box Content</label>
            <input type="text" name="third_box_content" class="form-control" id="" value="{{ $data->third_box_content }}">
          </div>  
          
          {{-- <div class="mb-3 col-md-6">
            <label for="" class="form-label">Content</label>
            <textarea name="content" id="" class="form-control"  rows="3"></textarea>
          </div> --}}
          <div class="mb-3 col-md-6">
            <label class="form-label">Banner Image</label>
            <input type="file" name="image" accept="image" class="form-control" id="">
          </div>
        </div>
       

        
        {{-- <div class="row">
         <label for="" class="form-lbel">Address</label>
          <textarea name="suggestion"  class="form-control"  id="suggestion" rows="3"></textarea>
        </div> --}}
        
           
        <input type="submit" class="btn btn-success mt-3 float-end" value="SUBMIT" />
      </form>

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