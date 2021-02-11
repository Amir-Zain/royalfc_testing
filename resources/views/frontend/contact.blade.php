@extends('layouts.index')

@section( 'nav')

<li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('league')}}">League</a></li>
<li><a href="{{ route('gallery') }}">Gallery</a></li>
<li><a href="{{ route('players') }}">Players</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li class="active"><a href="{{ route('contact') }}">Contact</a></li>

@endsection

@section( 'main-content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hero-wrap text-center" style="background-image: url('images/hero_2.jpg');" data-stellar-background-ratio="0.5">
                <div class="hero-contents">
                    <h2>Get In Touch</h2>
                    <p><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Contact</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-7 mb-5">

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                <form action="{{ route('contact.mail') }}" method="post" class="contact-form">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Name</label>
                            <input type="text" id="fullname" name="name" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4 ml-auto">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold text-black">Address</p>
                    <p class="mb-4 text-black">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold text-black">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold text-black">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>


            </div>
        </div>
    </div>
</div>

@endsection
