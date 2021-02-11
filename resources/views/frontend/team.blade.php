@extends('layouts.index')

@section( 'nav')

<li><a href="{{ route('home') }}">Home</a></li>
<li class="active"><a href="{{ route('league')}}">League</a></li>
<li><a href="{{ route('gallery') }}">Gallery</a></li>
<li><a href="{{ route('players') }}">Players</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>

@endsection

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hero-wrap text-center" style="background-image: url('{{ $mainImage->image }}');" data-stellar-background-ratio="0.5">
                <div class="hero-contents">
                    <h2>NSL 2K21</h2>
                    <p><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>NSL</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-between mb-15">
            {{-- <div class="col-lg-7 mb-5 mb-md-0 mb-lg-0">
                    <img src="{{ $aboutImage->image }}" alt="Image" class="img-fluid">
        </div> --}}
        <div class="col-md-15 col-lg-15 mb-15">

            <h1 class="mb-4 section-title">{{$team->team}}</h1>
            <img src="/images/{{ $team->team_logo }}" alt="Image" class="img-fluid">

        </div>
    </div>

</div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-6">
                <h2 class="section-title">Managers</h2>
            </div>
        </div>
        <div class="row">
            {{-- @foreach($players as $player) --}}
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="item player">
                    <img src="/images/{{$team->manager_image}}" alt="Image" class="img-fluid">
                    <div class="p-4">
                        <h4>{{$team->manager}}</h4>
                        {{-- <p>#12 / GK</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="item player">
                    <img src="/images/{{$team->assist_image}}" alt="Image" class="img-fluid">
                    <div class="p-4">
                        <h4>{{$team->assist}}</h4>
                        {{-- <p>#12 / GK</p> --}}
                    </div>
                </div>
            </div>

            {{-- @endforeach --}}

        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row align-items-center mb-2">
            <div class="col-6">
                <h2 class="section-title">Players</h2>
            </div>
        </div>
        <div class="row">

            @foreach($players as $player)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="item player">
                    <img src="/images/{{ $player->player_image }}" alt="Image" class="img-fluid">
                    <div class="p-4">
                        <h3>{{ $player->player_name }}</h3>
                        <p>#{{ $player->player_number}} / {{ $player->player_position }}</p>
                    </div>
                </div>
            </div>

            @endforeach

            \

        </div>
    </div>
</div>




{{-- <div class="site-section">
    <div class="container">

        <div class="row align-items-center mb-2">
            <div class="col-6">
                <h2 class="section-title">Website Develepors</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="item player">
                    <a href="https://www.instagram.com/amir__zain/" target="_blank"><img src="images/46291654_379318946157150_4937642364619234314_n.jpg" alt="Image" height="250" width="200"></a>
                    <div class="p-4">
                        <h3>Amir Zain</h3>
                        <p>Web Develepor</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="item player">
                    <a href="https://www.instagram.com/rashid_abz/" target="_blank"><img src="images/rashid.jpg" alt="Image" height="250" width="200"></a>
                    <div class="p-4">
                        <h3>Rashid</h3>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <p>This Websate made by Amir with help of Rashid</p>

            </div>
        </div>
    </div>
</div> --}}




@endsection
