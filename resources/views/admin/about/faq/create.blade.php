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
      <h5 class="card-title fw-semibold mb-4">Add  Faq</h5>

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
         <form action="{{ route('admin.about-faqs.store') }}" method="post">
        @csrf
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="" class="form-label">Title</label>
            <input type="text" name="heading" class="form-control" id="" value="{{ old('heading') }}" placeholder="Enter title">
            @if($errors->has('heading'))
                    <div class="text-danger error">{{ $errors->first('heading') }}</div>
            @endif
          </div>   
          <div class="mb-3 col-md-12">
            <label for="" class="form-label">Content</label>
            <textarea type="text" name="content" class="form-control" placeholder="Enter blog content"></textarea>
            @if($errors->has('content'))
                    <div class="text-danger error">{{ $errors->first('content') }}</div>
            @endif
          </div>
          
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