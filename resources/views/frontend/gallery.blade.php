@extends('layouts.index')

@section( 'nav')

<li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('league')}}">League</a></li>
<li class="active"><a href="{{ route('gallery') }}">Gallery</a></li>
<li><a href="{{ route('players') }}">Players</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>

@endsection

@section( 'main-content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hero-wrap text-center" style="background-image: url('images/hero_2.jpg');" data-stellar-background-ratio="0.5">
                <div class="hero-contents">
                    <h2>Gallery</h2>
                    <p><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Gallery</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-6">
                <h2 class="section-title">Team Gallery</h2>
            </div>
        </div>

        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/images/{{ $gallery->image }}" data-fancybox="gal"><img src="/images/{{ $gallery->image }}" alt="Image" width="240" height="180"></a>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
