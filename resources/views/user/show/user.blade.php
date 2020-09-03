@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome to Your User Page</h1>

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
                        <tr>
                          <th scope="row"> {{ $user->id }} </th>
                          <td> {{ $user->email }} </td>
                          <td> {{ $user->name }} </td>
                          <td> {{ $user->roles->pluck('name') }} </td>
                          <td> <a href="{{ route('user_manage.show', $user) }}" type="button" class="btn btn-primary">Show</a>
                               <a href="{{ route('user_manage.edit', $user) }}" type="button" class="btn btn-primary">Edit</a>
                               <a href="{{ route('user_manage.del', $user) }}" type="button" class="btn btn-primary">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
