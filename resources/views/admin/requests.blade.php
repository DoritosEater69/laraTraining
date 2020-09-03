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

                    <table class="table table-bordered">
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
                          <td> <a href="{{ route('admin_req_accept_single', $user->id) }}" type="button" class="btn btn-primary">Grant Access</a></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                    <a href=" {{ route('admin_req_accept') }} " type="button" class="btn btn-dark">Give rights</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
