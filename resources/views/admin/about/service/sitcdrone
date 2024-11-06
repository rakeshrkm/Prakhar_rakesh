@extends('layouts.admin.master')
@section('style')
<style>
    tr td{
        border:1px solid;
    }
</style>
@endsection
@section('content')
<div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4 float-left">About Us</h5>
    @if(count($chooseUs) > 0)
    @else
        <a href="{{ route('admin.chooseus.create') }}"><button class="float-right btn btn-success">Add New</button></a>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @elseif(session('error'))
      <div class="alert alert-warning">
      {{  session('error') }}
      </div>
    @endif
    <table  class="table table-bordered" id="blog_table"  class="display" style="width:100%; tr td{bordered}" >
        <thead>
            <tr>
                <th>Sr No.</th>
                <th>Title</th>
                <th>Created Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($chooseUs as $choose)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> {{ $choose->title }} </td>
                <td>{{ App\Helpers\GeneralHelper::dateFormat($choose->created_at) }}</td>
                <td>{{ $choose->status == App\Helpers\ConstantHelper::ACTIVE? 'Active':'In Active' }}</td>
                <td class="text-center">
                    <a href="{{url('admin/chooseus/edit/'. $choose->id)}}"><i class="fa fa-pencil"></i></a>
                </td>
            </tr>
            @empty
            <tr>
                <td  colspan="5" class="text-center"><p class="text-danger">Data not found</p></td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div>
</div>

@endsection
@section('script')

<script type="text/javascript">
  new DataTable('#blog_table')
</script>
@endsection