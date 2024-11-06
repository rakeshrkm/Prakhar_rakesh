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
        <h5 class="card-title fw-semibold mb-4 mt-4 float-left">Gallery</h5>
      <a href="{{ route('admin.gallery.create') }}"><button class="float-right btn btn-success">Add New</button></a>


                    @if(session('success'))
                        <div class="alert alert-success">
                                {{ session('success')  }}
                        </div>
                        @elseif(session('error'))
                        <div class="alert alert-warning">
                         {{  session('error') }}
                        </div>
                        @endif
    <div class="card-body p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table  class="table table-bordered" id="gallery_table"  class="display" style="width:100%; tr td{bordered}" >
                       
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $gallery->category }} </td>
                                    <td> {{ $gallery->images }} </td>
                                    <td>{{ App\Helpers\GeneralHelper::dateFormat($gallery->date) }}</td>
                                    <td>{{ $gallery->status == App\Helpers\ConstantHelper::ACTIVE? 'Active':'In Active' }}</td>
                                    <td class="text-center">
                                        <a href="{{url('admin/gallery/edit/'. $gallery->id)}}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td  colspan="5"><p class="text-danger">Data not found</p></td>
                                </tr>
                                @endforelse 
                        </tbody>
                    </table>
                    {{$galleries->links()}}
                </div>
            </div>
        </div>

    
    </div>
</div>

@endsection