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

                    <h1>Success - Users were given all rights</h1>

                    <ul class="list-group">
                        @foreach ($users as $user)
                          <p class="">Username:</p>
                          <p>{{ $user->name }}</p>
                          <p class="">Email:</p>
                          <p>{{ $user->email }}</p>
                        @endforeach
                    </ul>

                    <a href=" {{ route('admin_req_accept') }} " type="button" class="btn btn-dark">Give rights</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
