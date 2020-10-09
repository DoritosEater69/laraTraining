@extends('layouts.app')

@section('content')

    <span id="#home"></span>

    <video autoplay muted loop id="bgTopLoop"  style="z-index:2; opacity: 0.1;" uk-parallax="blur:200; viewport: 0.3;">
        <source src="{{ asset('images/Underwater_Bubbles.mp4') }}" type="video/mp4">
    </video>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 title-overlay mx-0 px-0" style="z-index:4;" uk-parallax="blur:290;">
                <div class="content w-100 h-100">
                    <div class="title m-b-md">
                        <h1>{{ config('app.name') }}</h1>
                    </div>

                @if(Auth::check() )
                    <div class="col-12 title-overlay mx-0 px-0">
                        <h1>If you are logged in - You can see this content.</h1>
                    </div>
                    @role('admin')
                    <div class="col-12 title-overlay mx-0 px-0 mt-5">
                        <h1>If you are logged in and you're admin - You can see this content.</h1>
                    </div>
                    @endrole
                @else

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12">
                            <h1>You are not logged in yet!</h1>
                            <h1 class="pb-4">Scroll <span href="#start" uk-scroll>down</span> to see something nice!</h1>
                            <svg height="20%" width="20%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve" uk-scroll href="#start">
                                <g>
                                    <g>
                                        <polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093" fill="white"/>
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
    </div>
</div>

<div class="container-fluid mx-0 px-0  w-100 h-100" uk-parallax="opacity: 0,8">
    <img src="{{ asset('images/background_main.png') }}" class="w-100" style="z-index:3">
    <video autoplay muted loop id="bgBottomLoop">
        <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
    </video>
    <img src="{{ asset('images/background_main_2.png') }}" class="w-100 h-100 position-relative">
</div>

<div class="container-fluid tile1  w-100 h-100" id="start">
    <div class="content w-100 h-100">
        <div class="row">
            <div class="col-12 col-md-6 title" uk-parallax="x: 0,30%,0; ">
                <h1>Test</h1>
            </div>
            <div class="col-12 col-md-6 title" uk-parallax="x: 0,-30%,0;">
                <h1>Test</h1>
            </div>
        </div>
        <svg height="20%" width="20%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve" uk-scroll href="#gallery">
        <g>
            <g>
                <polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093" fill="white"/>
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
        <div class="row h-100">
            <div class="col-12 title" uk-parallax="y: 20%,0%,0%;">
                <div class="row">
                    <div class="col-12 col-md-6">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </div>
                    <div class="col-12 col-md-6">
                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
            <div class="col-12 title svgColumn" uk-parallax="y: 20%,0%,0%;">
                <div class="row">
                    <div class="col-3 w-100 h-100">
                        <img src="{{ asset('images/cloud-drizzle.svg') }}" uk-svg>
                    </div>
                    <div class="col-3 w-100 h-100">
                        <img src="{{ asset('images/cloud-lightning.svg') }}" uk-svg>
                    </div>
                    <div class="col-3 w-100 h-100">
                        <img src="{{ asset('images/cloud-snow.svg') }}" uk-svg>
                    </div>
                    <div class="col-3 w-100 h-100">
                        <img src="{{ asset('images/cloud.svg') }}" uk-svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.spacer')

<div class="movingBackground" id="showcase">
    <div class="container title pt-0 mt-0 w-100 h-100 px-0 mx-auto">
        <img src="{{ asset('images/bottomBG.png') }}" id="bgBottomLoop2">
        <div class="row text-right">
            <div class="col-12 d-flex align-items-end flex-column" style="background-image: url('{{ asset('images/waves.jpg')}}'); background-size: cover; background-repeat: no-repeat; min-height: 100%; height:500px !Important" uk-parallax="bgy: -900">
                <h1>Moving background.</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </div>
    <div class="container title py-5 mt-0 w-100 h-100 px-0 mx-auto">
        <div class="row">
            <div class="col-12 flex-column" style="background-image: url('{{ asset('images/1.jpg')}}'); background-size: cover; background-repeat: no-repeat; min-height: 100%; height:500px !Important" uk-parallax="bgy: -1500">
                <h1 class="d-flex align-self-end">Moving background.</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </div>
    <div class="container title pt-0 mt-0 w-100 h-100 px-0 mx-auto">
        <div class="row text-right">
            <div class="col-12 flex-column" style="background-image: url('{{ asset('images/2.jpg')}}'); background-size: cover; background-repeat: no-repeat; min-height: 100%; height:500px !Important" uk-parallax="bgy: -900">
                <h1>Moving background.</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </div>
    <div class="container title py-5 mt-0 w-100 h-100 px-0 mx-auto">
        <div class="row">
            <div class="col-12 flex-column" style="background-image: url('{{ asset('images/3.jpg')}}'); background-size: cover; background-repeat: no-repeat; min-height: 100%; height:500px !Important" uk-parallax="bgy: -500">
                <h1>Moving background.</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </div>
    <div class="container title pt-0 mt-0 w-100 h-100 px-0 mx-auto">
        <div class="row text-right">
            <div class="col-12 flex-column" style="background-image: url('{{ asset('images/waves.jpg')}}'); background-size: cover; background-repeat: no-repeat; min-height: 100%; height:500px !Important" uk-parallax="bgy: -500">
                <h1>Moving background.</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </div>
</div>

@include('includes.spacer')

<div class="container-fluid title w-100 h-100 px-0 mx-0"  style="background: #1a1a2e !important">
    <div class="row text-center w-100" id="gallery">
        <div class="col-12 col-md-8 mx-auto"  uk-parallax="viewport: 0.5">
            <div class="uk-position-relative" uk-slideshow="animation: fade">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="{{ asset('images/gal1.jpg') }}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="{{ asset('images/gal3.jpg') }}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="{{ asset('images/gal4.jpg') }}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="{{ asset('images/gal2.jpg') }}" alt="" uk-cover>
                    </li>
                </ul>
                <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-thumbnav">
                        <li uk-slideshow-item="0"><a href="#"><img src="{{ asset('images/gal1.jpg') }}" width="100" alt=""></a></li>
                        <li uk-slideshow-item="1"><a href="#"><img src="{{ asset('images/gal3.jpg') }}" width="100" alt=""></a></li>
                        <li uk-slideshow-item="2"><a href="#"><img src="{{ asset('images/gal4.jpg') }}" width="100" alt=""></a></li>
                        <li uk-slideshow-item="3"><a href="#"><img src="{{ asset('images/gal2.jpg') }}" width="100" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
