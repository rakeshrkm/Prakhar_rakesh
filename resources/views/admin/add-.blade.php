@extends('layouts.admin.master')
@section('css')

  <style>
  </style>

@endsection
@section('content')

<div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>

<div class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div>

<div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Add User</h5>

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

      <form action="{{ route('admin.post-add-user') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h5 class="font-bold">General Details</h5>
        <hr class="mb-3">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Company Name</label>
            <input type="text" name="company_name" class="form-control" id="">
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="">
          </div>  
          <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
       
          <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Contact No.</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="">
          </div> 
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Address</label>
            <textarea name="address" id="" class="form-control"  rows="3"></textarea>
          </div>
        </div>
          
       
        <h5 class="font-bold">Threat Analysis</h5>
        <hr class="mb-3">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label">Latitude</label>
            <input type="text" name="latitude" class="form-control" id="">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Longitude</label>
            <input type="text" name="longitude" class="form-control" id="">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Area (in acres)</label>
            <input type="text" name="area" class="form-control" id="">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control" id="">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Report File</label>
            <input type="file" name="file" accept=".zip" class="form-control" id="">
          </div>
        </div>


        <h5 class="mt-4 font-bold">Suggestion</h5>
        <hr class="mb-3">
        <div class="row">
          {{-- <label for="" class="form-lbel">Address</label> --}}
          <textarea name="suggestion"  class="form-control"  id="suggestion" rows="3"></textarea>
        </div>
        
           
        <button type="submit" class="btn btn-light mt-3 float-end"><b>SUBMIT</b></button>
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