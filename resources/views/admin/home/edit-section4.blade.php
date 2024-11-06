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
      <h5 class="card-title fw-semibold mb-4">Add Professional Skill Section</h5>

      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @elseif(session('error'))
      <div class="alert alert-warning">
      {{  session('error') }}
      </div>
    @endif
<!--    @if ($errors->any())-->
<!--    <div class="alert alert-danger">-->
<!--        <ul>-->
<!--            @foreach ($errors->all() as $error)-->
<!--                <li>{{ $error }}</li>-->
<!--            @endforeach-->
<!--        </ul>-->
<!--    </div>-->
<!--@endif-->

      <form action="{{ route('updateProfessional') }}" method="post" enctype="multipart/form-data">
        @csrf
     
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Title <sup><span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" id="" value="{{ $data->title }}">
                @if($errors->has('title'))
                    <div class="text-danger error">{{ $errors->first('title') }}</div>
                @endif
          </div>   
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Heading <sup><span class="text-danger">*</span></label>
            <input type="text" name="heading" class="form-control" id="" value="{{ $data->heading }}">
            @if($errors->has('heading'))
                <div class="text-danger error">{{ $errors->first('heading') }}</div>
            @endif
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Web development <sup><span class="text-danger">*</span></label>
            <input type="text" name="web_development" class="form-control" id="" value="{{ $data->web_development }}">
            @if($errors->has('web_development'))
                <div class="text-danger error">{{ $errors->first('web_development') }}</div>
            @endif
          </div>  
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Web development Count <sup><span class="text-danger">*</span></label>
            <input type="text" name="web_development_count" class="form-control" id="" value="{{ $data->web_development_count }}">
            @if($errors->has('web_development_count'))
                <div class="text-danger error">{{ $errors->first('web_development_count') }}</div>
            @endif
          </div>  
          
          <div class="mb-3 col-md-6">
            <label for="" class="form-label">Drone Technology <sup><span class="text-danger">*</span></label>
            <input type="text" name="drone_technology" class="form-control" id="" value="{{ $data->drone_technology }}">
            @if($errors->has('drone_technology'))
                <div class="text-danger error">{{ $errors->first('drone_technology') }}</div>
            @endif
          </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Drone Technology  Count <sup><span class="text-danger">*</span></label>
            <input type="text" name="drone_technology_count" class="form-control" id="" value="{{ $data->drone_technology_count }}">
            @if($errors->has('drone_technology_count'))
                <div class="text-danger error">{{ $errors->first('drone_technology_count') }}</div>
            @endif
          </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Manpower Support <sup><span class="text-danger">*</span></label>
            <input type="text" name="manpower_support" class="form-control" id="" value="{{ $data->manpower_support }}">
            @if($errors->has('manpower_support'))
                <div class="text-danger error">{{ $errors->first('manpower_support') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">Manpower Support  Count <sup><span class="text-danger">*</span></label>
            <input type="text" name="manpower_support_count" class="form-control" id="" value="{{ $data->manpower_support_count }}">
            @if($errors->has('manpower_support_count'))
                <div class="text-danger error">{{ $errors->first('manpower_support_count') }}</div>
            @endif
         </div>  
                   
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">System Integration <sup><span class="text-danger">*</span></label>
            <input type="text" name="system_integration" class="form-control" id="" value="{{ $data->system_integration }}">
            @if($errors->has('system_integration'))
                <div class="text-danger error">{{ $errors->first('system_integration') }}</div>
            @endif
        </div>  
          
        <div class="mb-3 col-md-6">
            <label for="" class="form-label">System Integration  Count <sup><span class="text-danger">*</span></label>
            <input type="text" name="system_integration_count" class="form-control" id="" value="{{ $data->system_integration_count }}">
            @if($errors->has('system_integration_count'))
                <div class="text-danger error">{{ $errors->first('system_integration_count') }}</div>
            @endif
         </div>  
          <div class="mb-3 col-md-6">
            <label class="form-label">First Image <sup><span class="text-danger">*</span></label>
            <input type="file" name="skill_first_image" accept="image" class="form-control" id="">
                <img src="{{ asset('uploads/professional/'.$data->skill_first_image ) }}" width="50" height="50" />

          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Second Image <sup><span class="text-danger">*</span></label>
            <input type="file" name="skill_second_image" accept="image" class="form-control" id="">
            <img src="{{ asset('uploads/professional/'.$data->skill_second_image) }}" width="50" height="50" />
          </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Third Image <sup><span class="text-danger">*</span></label>
            <input type="file" name="skill_third_image" accept="image" class="form-control" id="">
            <img src="{{ asset('uploads/professional/'.$data->skill_third_image) }}" width="50" height="50" />
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