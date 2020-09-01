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

                    <h1>Welcome to Your Dashboard Page</h1>
                    Your <b>Name</b>: {{ $user->name }}<br>
                    Your Email: {{ $user->email }}<br>
                    Your created your Account at: {{ $user->created_at }}<br>
                    Your updated your Account at: {{ $user->updated_at }}<br>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
