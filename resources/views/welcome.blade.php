<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
                    {{ config('app.name') }}
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
                    <b>You are not logged in yet!</b>
                </div>
            </div>
        </div>

        @endif

        </div>
    </body>
</html>
