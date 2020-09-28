@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Admin Requests by Users</h1>

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Email</th>
                          <th scope="col">Name</th>
                          <th scope="col">Role</th>
                          <th scope="col">Options</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($users as $user)
                        <tr>
                          <th scope="row"> {{ $user->id }} </th>
                          <td> {{ $user->email }} </td>
                          <td> {{ $user->name }} </td>
                          <td> {{ $user->roles->pluck('name') }} </td>
                          <td>
                            <a href="{{ route('admin_req_accept_single', $user->id) }}" type="button" class="btn btn-primary mb-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            </a>
                            <a href=" {{ route('admin_req_decline_single', $user->id) }} " type="button" class="btn btn-dark">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                              </svg>
                            </a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                    <a href=" {{ route('admin_req_accept') }} " type="button" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg> - All</a>
                    <a href=" {{ route('admin_req_decline') }} " type="button" class="btn btn-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                      </svg>
                      - All
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
