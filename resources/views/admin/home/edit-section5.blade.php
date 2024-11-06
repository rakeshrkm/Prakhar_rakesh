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
      <h5 class="card-title fw-semibold mb-4">Add Section Five</h5>

      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @elseif(session('error'))
      <div class="alert alert-warning">
      {{  session('error') }}
      </div>
    @endif
      <form action="{{ route('updateSectionFive') }}" method="post" enctype="multipart/form-data">
        @csrf
     
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Experiences</label>
            <input type="text" name="experiences_heading" class="form-control" id="" @if(!empty($data->experiences_heading)) value="{{ $data->experiences_heading }}" @endif>
               <input type="hidden" name="id" class="form-control" id="" @if(!empty($data->id)) value="{{ $data->id }}"  @endif>
            @if($errors->has('experiences_heading'))
                    <div class="text-danger error">{{ $errors->first('experiences_heading') }}</div>
            @endif
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Experiences Value</label>
            <input type="text" name="experiences_value" class="form-control" id="" @if(!empty($data->experiences_value)) value="{{ $data->experiences_value }}  @endif">
            @if($errors->has('experiences_value'))
                    <div class="text-danger error">{{ $errors->first('experiences_value') }}</div>
            @endif
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Happy client</label>
            <input type="text" name="happy_client_heading" class="form-control" id="" @if(!empty($data->experiences_value)) value="{{ $data->happy_client_heading }} @endif">
            @if($errors->has('happy_client_heading'))
                    <div class="text-danger error">{{ $errors->first('happy_client_heading') }}</div>
            @endif
          </div>  
           <div class="mb-3 col-md-6">
            <label for="" class="form-label">Happy client Value</label>
            <input type="text" name="happy_client_value" class="form-control" id="" @if(!empty($data->experiences_value)) value="{{ $data->happy_client_value }}" @endif>
            @if($errors->has('happy_client_value'))
                    <div class="text-danger error">{{ $errors->first('happy_client_value') }}</div>
            @endif
          </div>  
          
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Project done</label>
            <input type="text" name="project_done_heading" class="form-control" id="" @if(!empty($data->experiences_value)) value="{{ $data->project_done_heading }}"  @endif>
            @if($errors->has('project_done_heading'))
                    <div class="text-danger error">{{ $errors->first('project_done_heading') }}</div>
            @endif
          </div> 
           <div class="mb-3 col-md-6">
            <label for="" class="form-label">Project done value</label>
            <input type="text" name="project_done_value" class="form-control" id="" @if(!empty($data->project_done_value)) value="{{ $data->project_done_value }}" @endif />
            @if($errors->has('project_done_value'))
                    <div class="text-danger error">{{ $errors->first('project_done_value') }}</div>
            @endif
          </div>  
          
           <div class="mb-3 col-md-6">
            <label for="" class="form-label">Our service area</label>
            <input type="text" name="our_service_area" class="form-control" id="" @if(!empty($data->our_service_area)) value="{{ $data->our_service_area }}" @endif />
            @if($errors->has('our_service_area'))
                    <div class="text-danger error">{{ $errors->first('our_service_area') }}</div>
            @endif
          </div>  
          
           <div class="mb-3 col-md-6">
            <label for="" class="form-label">Our service area value</label>
            <input type="text" name="our_service_value" class="form-control" id="" @if(!empty($data->our_service_value)) value="{{ $data->our_service_value }}" @endif>
               <input type="hidden" name="status" class="form-control" id="" value="1">
            @if($errors->has('our_service_value'))
                    <div class="text-danger error">{{ $errors->first('our_service_value') }}</div>
            @endif
          </div>  
        </div>
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