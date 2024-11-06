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
      <h5 class="card-title fw-semibold mb-4">Add Service Section</h5>

      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @elseif(session('error'))
      <div class="alert alert-warning">
      {{  session('error') }}
      </div>
    @endif
    <!--@if ($errors->any())-->
    <!--<div class="alert alert-danger">-->
    <!--    <ul>-->
    <!--        @foreach ($errors->all() as $error)-->
    <!--            <li>{{ $error }}</li>-->
    <!--        @endforeach-->
    <!--    </ul>-->
    <!--</div>-->
    <!--@endif-->

      <form action="{{ route('updateService') }}" method="post" enctype="multipart/form-data">
        @csrf
     
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Title</label>
            <input type="text" name="first_heading" class="form-control" id="" value="{{ $data->first_heading }}">
            @if($errors->has('first_heading'))
            <div class="text-danger error">{{ $errors->first('first_heading') }}</div>
            @endif
            
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Second Heading</label>
            <input type="text" name="second_heading" class="form-control" id="" value="{{ $data->second_heading }}">
             @if($errors->has('second_heading'))
            <div class="text-danger error">{{ $errors->first('second_heading') }}</div>
            @endif
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Content Second Heading</label>
            <textarea name="content_second_heading" id="" class="form-control"  rows="3"> {{ $data->content_second_heading }}</textarea>
            @if($errors->has('content_second_heading'))
            <div class="text-danger error">{{ $errors->first('content_second_heading') }}</div>
            @endif
          </div>
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Drone Technology</label>
            <input type="text" name="drone_tect_heading" class="form-control" id="" value="{{ $data->drone_tect_heading }}">
            @if($errors->has('drone_tect_heading'))
                <div class="text-danger error">{{ $errors->first('drone_tect_heading') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Drone Technology Content</label>
            <textarea name="drone_tech_content" id="" class="form-control"  rows="3">{{ $data->drone_tech_content }}  </textarea>
            @if($errors->has('drone_tech_content'))
                <div class="text-danger error">{{ $errors->first('drone_tech_content') }}</div>
            @endif
        </div>
        
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Manpower Support</label>
            <input type="text" name="manpower_support_heading" class="form-control" id="" value="{{ $data->manpower_support_heading }}">
            @if($errors->has('manpower_support_heading'))
                <div class="text-danger error">{{ $errors->first('manpower_support_heading') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Manpower Support Content</label>
            <textarea name="manpower_content" id="" class="form-control"  rows="3">{{ $data->manpower_content }}  </textarea>
            @if($errors->has('manpower_content'))
                <div class="text-danger error">{{ $errors->first('manpower_content') }}</div>
            @endif
        </div>
        
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Web/App Development</label>
            <input type="text" name="web_app_heading" class="form-control" id="" value="{{ $data->web_app_heading }}">
            @if($errors->has('web_app_heading'))
                <div class="text-danger error">{{ $errors->first('web_app_heading') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Web/App  Development Content</label>
            <textarea name="web_app_content" id="" class="form-control"  rows="3">{{ $data->web_app_content }}  </textarea>
            @if($errors->has('web_app_content'))
                <div class="text-danger error">{{ $errors->first('web_app_content') }}</div>
            @endif
        </div>
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">GIS Based Services</label>
            <input type="text" name="gis_based_service_head" class="form-control" id="" value="{{ $data->gis_based_service_head }}">
            @if($errors->has('gis_based_service_head'))
                <div class="text-danger error">{{ $errors->first('gis_based_service_head') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">GIS Based Services Content</label>
            <textarea name="gis_based_service_content" id="" class="form-control"  rows="3">{{ $data->gis_based_service_content }}  </textarea>
            @if($errors->has('gis_based_service_content'))
                <div class="text-danger error">{{ $errors->first('gis_based_service_content') }}</div>
            @endif
        </div>
        
         <div class="mb-3 col-md-6">
            <label for="" class="form-label">System Integration</label>
            <input type="text" name="system_integration_head" class="form-control" id="" value="{{ $data->system_integration_head }}">
            @if($errors->has('system_integration_head'))
                <div class="text-danger error">{{ $errors->first('system_integration_head') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">System Integration Content</label>
            <textarea name="system_integration_content" id="" class="form-control"  rows="3">{{ $data->system_integration_content }}  </textarea>
            @if($errors->has('system_integration_content'))
                <div class="text-danger error">{{ $errors->first('system_integration_content') }}</div>
            @endif
        </div>
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">HR Outsourcing</label>
            <input type="text" name="hr_outsourcing_head" class="form-control" id="" value="{{ $data->hr_outsourcing_head }}">
             @if($errors->has('hr_outsourcing_head'))
                <div class="text-danger error">{{ $errors->first('hr_outsourcing_head') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">HR Outsourcing Content</label>
            <textarea name="hr_outsourcing_content" id="" class="form-control"  rows="3">{{ $data->hr_outsourcing_content }}  </textarea>
             @if($errors->has('hr_outsourcing_content'))
                <div class="text-danger error">{{ $errors->first('hr_outsourcing_content') }}</div>
            @endif
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