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
<h2 class="h3 mb-4 text-gray-800">ADD Teams</h2>
@if(Session::has('add-message'))
<div class="alert alert-success"> {{ Session::get('add-message') }}</div>
@endif
<form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Team Name</label>
                    <input type="text" id="" value="{{ old('team') }}" class="form-control @error('team') border border-danger @enderror" placeholder="Team Name" name="team" autocomplete="off">
                    @error('team')
                    <p class="help text-danger">{{ $errors->first('team') }}</p>
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
                    <label for="">Manager Name</label>
                    <input type="text" id="" value="{{ old('manager') }}" class="form-control @error('manager') border border-danger @enderror" placeholder="Manager Name" name="manager" autocomplete="off">
                    @error('manager')
                    <p class="help text-danger">{{ $errors->first('manager') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Manager Image</label>
                    <input type="file" name="manager_image" class="form-control-file">
                    @error('manager_image')
                    <p class="help text-danger">{{ $errors->first('manager_image') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Assist Name</label>
                    <input type="text" id="" value="{{ old('assist') }}" class="form-control @error('assist') border border-danger @enderror" placeholder="Assist Name" name="assist" autocomplete="off">
                    @error('assist')
                    <p class="help text-danger">{{ $errors->first('assist') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Assist Image</label>
                    <input type="file" name="assist_image" class="form-control-file">
                    @error('assist_image')
                    <p class="help text-danger">{{ $errors->first('assist_image') }}</p>
                    @enderror

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Icon Player Name</label>
                    <input type="text" id="" value="{{ old('icon_player') }}" class="form-control @error('icon_player') border border-danger @enderror" placeholder="Icon Player Name" name="icon_player" autocomplete="off">
                    @error('icon_player')
                    <p class="help text-danger">{{ $errors->first('icon_player') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Icon Player Image</label>
                    <input type="file" name="icon_player_image" class="form-control-file">
                    @error('icon_player_image')
                    <p class="help text-danger">{{ $errors->first('icon_player_image') }}</p>
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
