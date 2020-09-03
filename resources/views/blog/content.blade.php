@extends('blog.index')


@section('content')

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end mb-5">
                    @if (Route::has('login'))
                        <div class="links">
                            @auth
                                <a href="{{ url('/home') }}">Dashboard</a>
                                <a href="{{ route('user_profile') }}">Profile</a>

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
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-6">
                            <div class="card-group">
                              <div class="card">
                                <img class="card-img-top" src="https://via.placeholder.com/600x300?text=Blog%20Post%20Image" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
