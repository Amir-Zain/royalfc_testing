@extends('layouts.index')

@section( 'nav')

<li class="active"><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('league')}}">League</a></li>
<li><a href="{{ route('gallery') }}">Gallery</a></li>
<li><a href="{{ route('players') }}">Players</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>

@endsection

@section( 'main-content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hero-wrap" style="background-image: url('   {{ $image->image }}');" data-stellar-background-ratio="0.5">
                <div class="hero-contents">
                    <h2>NSL 2K21</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui distinctio aliquid dolor odio ullam odit cum veniam fuga aperiam aut.</p>
                    <p class="mb-0"><a href="{{route('league')}}" class="more"><span class="mr-2">+</span>Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="site-section">
    <div class="container">
        <div class="col-lg-8 ml-auto">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
                    <div class="custom-media d-flex">
                        <div class="img-wrap mr-3">
                            <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                        <div>
                            <span class="caption">Latest News</span>
                            <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                            <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
                    <div class="custom-media d-flex">
                        <div class="img-wrap mr-3">
                            <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                        <div>
                            <span class="caption">Team</span>
                            <h3><a href="#">Line for the upcoming match</a></h3>
                            <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-lg-7">

        </div>
    </div>

    <a href="#"></a>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="section-title">Our Players</h2>
            </div>
            <div class="col-6 text-right">
                <a href="#" class="custom-prev js-custom-prev-v2">Prev</a>
                <span class="mx-2">/</span>
                <a href="#" class="custom-next js-custom-next-v2">Next</a>
            </div>
        </div>

        <div class="owl-4-slider owl-carousel">
            @foreach($players as $player)
            <div class="item player">
                <a href="#"><img src="/images/{{ $player->player_image }}" alt="Image" class="img-fluid"></a>
                <div class="p-4">
                    <h3>{{ $player->name }}</h3>
                    <p>#{{ $player->number }} / {{ $player->position }}</p>
                </div>
            </div>
            @endforeach



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
                <a href="/images/{{ $gallery->image }}" data-fancybox="gal"><img src="/images/{{ $gallery->image }}" width="240" height="180" alt="Image"></a>
            </div>
            @endforeach


        </div>
    </div>
</div>





@endsection
