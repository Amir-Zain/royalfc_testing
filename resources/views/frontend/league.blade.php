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

            <h3 class="mb-4 section-title">PARALIYIL KHADER MEMMORIAL NSL 2K21</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident facere ducimus voluptatum, laudantium fugiat in aliquid! Ea necessitatibus ex provident. Voluptate sint, eaque ratione consequuntur earum nisi velit, quidem.</p>
            <p>Autem, odit, eligendi? Autem consequatur suscipit alias corporis perspiciatis minus sunt voluptate incidunt magni tempora.</p>
        </div>
    </div>

</div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-6">
                <h2 class="section-title">Teams Rankings</h2>
            </div>
        </div>

        <div class="container">
            <div class="sidebar-block">
                {{-- <div class="section-title-wrap">
                    <div class="section-title">
                        <h3 class="section-title-h">ISL Standings</h3>
                    </div>
                </div> --}}

                <div class="sidebar-inside-block">
                    <div class="results-table-wrap">
                        <table class="table table-striped">
                            <tbody>


                                <tr class="table-row-title">
                                    <td class="tbl-td td-title"><B>POS</td>
                                    <td class="tbl-td td-title"><B>TEAM</td>
                                    <td class="tbl-td td-title"><B>M</td>
                                    <td class="tbl-td td-title"><B>W</td>
                                    <td class="tbl-td td-title"><B>D</td>
                                    <td class="tbl-td td-title"><B>L</td>
                                    <td class="tbl-td td-title"><B>GD</td>
                                    <td class="tbl-td td-title"><B>P</td>
                                </tr>
                                {{-- @for($i = 0; $i < $scores.length; $i++) <td class="tbl-td">2</td>
                                    <td class="tbl-td td-team">
                                        <span class="tbl-logo-wrap">
                                            <img class="tbl-logo-img" src="/images/{{$scores[$i]->team_logo}}" alt="" width="100" height="100">
                                </span>

                                <span class="table-team-name">{{$scores[$i]->team}}</span>

                                </td>

                                <td class="tbl-td">{{$i}}</td>
                                <td class="tbl-td">{{$scores[$i]->matches}}</td>
                                <td class="tbl-td">{{$scores[$i]->wins}}</td>
                                <td class="tbl-td">{{$scores[$i]->draws}}</td>
                                <td class="tbl-td">{{$scores[$i]->loss}}</td>
                                <td class="tbl-td">{{$scores[$i]->goal_difference}}</td>
                                <td class="tbl-td">{{$scores[$i]->points}}</td>

                                </tr>

                                @endfor --}}
                                @foreach($scores as $score) <tr class="table-row even">
                                    <td class="tbl-td">{{ $loop->iteration}}</td>

                                    <td class="tbl-td td-team">
                                        <span class="tbl-logo-wrap">
                                            <img class="tbl-logo-img" src="/images/{{$score->team_logo}}" alt="" width="100" height="100">
                                        </span>

                                        <span class="table-team-name">{{ $score->team }}</span>
                                    </td>


                                    <td class="tbl-td">{{ $score->matches}}</td>
                                    <td class="tbl-td">{{ $score->wins}}</td>
                                    <td class="tbl-td">{{ $score->draws}}</td>
                                    <td class="tbl-td">{{ $score->loss}}</td>
                                    <td class="tbl-td">{{ $score->goal_difference}}</td>
                                    <td class="tbl-td">{{ $score->points}}</td>


                                </tr>

                                @endforeach





                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="site-section">
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-6">
                <h2 class="section-title">Teams Participating</h2>
            </div>
        </div>

        <div class="row">
            @foreach($teams as $team)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                {{-- <a href="{{route('team') }}"><img src="/images/img_1.jpg" width="240" height="180" alt="Image"></a> --}}


                <a href="{{route('team',$team->id) }}"><img src="/images/{{ $team->team_logo }}" width="240" height="180" alt="Image"></a>

            </div>
            @endforeach


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
