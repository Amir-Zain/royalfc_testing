@extends('layouts.admin')

@section( 'nav')

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Interface
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Interface</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Change Interface</h6>
            <a class="collapse-item" href="{{ route('home.index') }}">Home Page</a>
            <a class="collapse-item" href="{{ route('about.index') }}">About Page</a>
            <a class="collapse-item" href="{{ route('league.index') }}">League Page</a>

        </div>
    </div>
</li>
<!-- Heading -->
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Data
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Create Data</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Create Data</h6>
            <a class="collapse-item" href="{{ route('player.create') }}">Add Players</a>
            <a class="collapse-item" href="{{ route('image.create') }}">Add Gallery Photos</a>
            <a class="collapse-item" href="{{ route('team.create') }}">Add League Teams</a>
            <a class="collapse-item" href="{{ route('leaguePlayer.create') }}">Add League Players</a>
            <a class="collapse-item" href="{{ route('score.create') }}">Add League Rankings</a>

        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="{{ route('player.index')}}">Players</a>
            <a class="collapse-item" href="{{ route('image.index') }}">Gallery</a>
            <a class="collapse-item" href="{{ route('message.index') }}">Messages</a>
            <a class="collapse-item" href="{{ route('score.index') }}">League Rankings</a>
            <a class="collapse-item" href="{{ route('team.index') }}">League Teams</a>
            <a class="collapse-item" href="{{ route('leaguePlayer.index') }}">League Players</a>

        </div>
    </div>
</li>
@endsection




@section( 'content')
<h2 class="h3 mb-4 text-gray-800">ADD Scoreboard</h2>
@if(Session::has('add-message'))
<div class="alert alert-success"> {{ Session::get('add-message') }}</div>
@endif
<form action="{{ route('score.store') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @csrf
    <div class="form-body">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput6">Team</label>
                    <select class="select2-B form-control @error('team') border border-danger @enderror" name="team">
                        @foreach($teams as $team)
                        <option value="{{ $team->team }}">{{ $team->team}}</option>
                        @endforeach

                    </select>
                    @error('player_position')
                    <p class="help text-danger">{{ $errors->first('player_position') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Team Logo</label>
                    <input type="file" name="team_logo" class="form-control-file">
                    @error('team_logo')
                    <p class="help text-danger">{{ $errors->first('team_logo') }}</p>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Matches</label>
                    <input type="number" id="timepicker" value="{{ old('matches') }}" class="form-control @error('matches') border border-danger @enderror" placeholder="Matches" name="matches" autocomplete="off">
                    @error('matches')
                    <p class="help text-danger">{{ $errors->first('matches') }}</p>
                    @enderror
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Wins</label>
                    <input type="number" id="timepicker" value="{{ old('wins') }}" class="form-control @error('wins') border border-danger @enderror" placeholder="Wins" name="wins" autocomplete="off">
                    @error('wins')
                    <p class="help text-danger">{{ $errors->first('wins') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Loss</label>
                    <input type="number" id="timepicker" value="{{ old('loss') }}" class="form-control @error('loss') border border-danger @enderror" placeholder="Loss" name="loss" autocomplete="off">
                    @error('loss')
                    <p class="help text-danger">{{ $errors->first('loss') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Draws</label>
                    <input type="number" id="timepicker" value="{{ old('draws') }}" class="form-control @error('draws') border border-danger @enderror" placeholder="Draws" name="draws" autocomplete="off">
                    @error('draws')
                    <p class="help text-danger">{{ $errors->first('draws') }}</p>
                    @enderror
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Points</label>
                    <input type="number" id="timepicker" value="{{ old('points') }}" class="form-control @error('points') border border-danger @enderror" placeholder="Points" name="points" autocomplete="off">
                    @error('points')
                    <p class="help text-danger">{{ $errors->first('points') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Goal Difference</label>
                    <input type="number" id="timepicker" value="{{ old('goal_difference') }}" class="form-control @error('goal_difference') border border-danger @enderror" placeholder="Goal Difference" name="goal_difference" autocomplete="off">
                    @error('goal_difference')
                    <p class="help text-danger">{{ $errors->first('goal_difference') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" name="upload" class="btn btn-primary" value="submit">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
