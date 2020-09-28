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

                    <h1>Your User Profile:</h1>
                    Name: {{ $user->name }}<br>
                    Email: {{ $user->email }}<br>

                    <a type="button" class="btn btn-secondary mt-4" href="{{ route('user_profile_edit') }}">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
