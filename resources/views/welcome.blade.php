@extends('layouts.app')

@section('content')

    <div class="col-12 title-overlay">
            <div class="content container w-100 h-100">
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
                    <h1 class="pb-4">Scroll <span class="text-white">down</span> to see something nice!</h1>
                    <svg height="20%" width="20%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve">
                        <g>
                            <g>
                                <polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093   " fill="white"/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
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
<div class="col-12 tile1">
            <div class="content container w-100 h-100">
                <div class="row">
                    <div class="col-12 title m-b-md first-col">
                        <p>Test</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
