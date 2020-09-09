@extends('layouts.app')

@section('content')
    <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                        <a href="{{ route('user_profile') }}">Profile</a>
                        <a href="{{ route('blog') }}">Blog</a>

                    @role('admin')
                        <a href="{{ route('admin') }}">Admin requests</a>
                        <a href="{{ route('user_manage') }}">Userlist</a>
                    @endrole

                        <a href="{{ route('logout') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container">
                <div class="row">
                <div class="col-12 title m-b-md">
                    <p>{{ config('app.name') }}</p>
                </div>
            </div>

        @if(Auth::check() )
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>If you are logged in - You can see this content.</h1>
                    </div>
                    @role('admin')
                    <div class="col-6">
                        <h1>If you are logged in and you're admin - You can see this content.</h1>
                    </div>
                    @endrole
                </div>
            </div>
        @else

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1>You are not logged in yet!</h1>
                </div>
            </div>
        </div>

        @endif
    </div>
    </div>
    <div class="container-fluid mx-0 px-0">
        <img src="{{ asset('images/background_main.png') }}" class="w-100">
        <img src="{{ asset('images/background_main_2.png') }}" class="w-100">
    </div>
