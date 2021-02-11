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
<h2 class="h3 mb-4 text-gray-800">Edit ({{ $player->player_name }})</h2>
@if(Session::has('updated-message'))
<div class="alert alert-info"> {{ Session::get('updated-message') }}</div>
@endif
<form action="{{ route('leaguePlayer.update',$player->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @csrf
    @method('put')
    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Team</label>
                    <input type="text" id="" required value="{{ $player->team }}" class="form-control @error('team') border border-danger @enderror" placeholder="Name" name="team" autocomplete="off">
                    @error('team')
                    <p class="help text-danger">{{ $errors->first('team') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Player Name</label>
                    <input type="text" id="" required value="{{ $player->player_name }}" class="form-control @error('player_name') border border-danger @enderror" placeholder="Name" name="player_name" autocomplete="off">
                    @error('player_name')
                    <p class="help text-danger">{{ $errors->first('player_name') }}</p>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Jersey Number</label>
                    <input type="number" required id="timepicker" value="{{ $player->player_number }}" class="form-control @error('player_number') border border-danger @enderror" placeholder="Jersey Number" name="player_number" autocomplete="off">
                    @error('player_number')
                    <p class="help text-danger">{{ $errors->first('player_number') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput6">Player Position</label>
                    <select class="select2-B form-control @error('player_position') border border-danger @enderror" name="player_position">
                        <option value="GK">GK</option>
                        <option value="CB">CB</option>
                        <option value="RB">RB</option>
                        <option value="LB">LB</option>
                        <option value="CM">CM</option>
                        <option value="RWF">LWF</option>
                        <option value="RWF">RWF</option>
                        <option value="CF">CF</option>
                        <option value="SS">SS</option>

                    </select>
                    @error('player_position')
                    <p class="help text-danger">{{ $errors->first('player_position') }}</p>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Player Image</label>
                    <input type="file" name="player_image" class="form-control-file" required>
                    @error('player_image')
                    <p class="help text-danger">{{ $errors->first('player_image') }}</p>
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
