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

                    {{ __('You are logged in!') }}


                    <h1>Success!</h1>
                    <p>Welcome to your first Page</p><br>
                    <p>Check your emails if there is a Mail!</p><br>
                    Your <b>Name</b>: {{ $user->name }}<br>
                    Your Email: {{ $user->email }}<br>
                    Your Role: {{ $user->roles->implode('name', "") }}<br>
                    Your created your Account at: {{ $user->created_at }}<br>
                    Your updated your Account at: {{ $user->updated_at }}<br>
                    <br>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
