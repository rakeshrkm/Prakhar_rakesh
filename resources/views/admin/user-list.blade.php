@extends('layouts.admin.master')
@section('content')
<div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">User List</h5>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">S.N.</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Company Name</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Name</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Email</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Contact</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Location</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($contacts as $contact)
            <tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                <td class="border-bottom-0">
                    {{-- <h6 class="fw-semibold mb-1">{Sunil Joshi}</h6> --}}
                    <span class="fw-normal">{{ $contact->company_name}}</span>                          
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{ $contact->name}}</p>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    {{-- <span class="badge bg-primary rounded-3 fw-semibold">{{ $contact->email}}</span> --}}
                    <p class="mb-0 fw-normal">{{ $contact->email}}</p>
                  </div>
                </td>
                <td class="border-bottom-0">
                  {{-- <h6 class="fw-semibold mb-0 fs-4">{{ $contact->phone}}</h6> --}}
                  <p class="mb-0 fw-normal">{{ $contact->phone}}</p> 
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">{{ $contact->location}}</h6>
                  </td>
              </tr>  
            @empty
                
            @endforelse
                                
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection