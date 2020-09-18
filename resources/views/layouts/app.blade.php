@include('layouts.header')

    <div id="app">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Back</a>
                    <a href="{{ url('/home') }}">Dashboard</a>
                    <a href="{{ route('user_profile') }}">Profile</a>
                    <a href="{{ route('blog') }}">Blog</a>

                @role('admin')
                    <a href="{{ route('admin') }}">Admin requests</a>
                    <a href="{{ route('user_manage') }}">Userlist</a>
                @endrole

                    <a href="{{ route('logout') }}">Logout</a>
                @else

                    <a type="button" class="btn btn-primary"" data-toggle="modal" data-target="#login" data-whatever="@mdo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line>
                            <filter id="svgFilter" >
                                <feGaussianBlur stdDeviation="2" />
                            </filter>
                        </svg>
                        Login
                    </a>

                    @if (Route::has('register'))
                    <a type="button" data-toggle="modal" data-target="#register" data-whatever="@fat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                        <filter id="svgFilter" >
                            <feGaussianBlur stdDeviation="2" />
                        </filter>
                        </svg>
                        Register
                    @endif
                    </a>
                @endauth
            </div>
        @endif
        <main class="py-4 h-100 w-100">
            @yield('content')
        </main>
    </div>

    <filter>
        <feGaussianBlur stdDeviation="2" />
            <div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="model-dialog w-100 pt-5" role="document">
                    @include('auth.login')
              </div>
            </div>

            <div class="modal" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="model-dialog w-100 pt-5" role="document">
                    @include('auth.register')
              </div>
            </div>
    </filter>

@include('layouts.footer')
