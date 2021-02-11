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
<h2 class="h3 mb-4 text-gray-800">ADD PLAYERS</h2>
@if(Session::has('add-message'))
<div class="alert alert-success"> {{ Session::get('add-message') }}</div>
@endif
<form action="{{ route('player.store') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" id="" value="{{ old('name') }}" class="form-control @error('name') border border-danger @enderror" placeholder="Name" name="name" autocomplete="off">
                    @error('name')
                    <p class="help text-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="number" id="" value="{{ old('age') }}" class="form-control @error('age') border border-danger @enderror" placeholder="Age" name="age" autocomplete="off">
                    @error('age')
                    <p class="help text-danger">{{ $errors->first('age') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Jersey Number</label>
                    <input type="number" id="timepicker" value="{{ old('number') }}" class="form-control @error('number') border border-danger @enderror" placeholder="Jersey Number" name="number" autocomplete="off">
                    @error('number')
                    <p class="help text-danger">{{ $errors->first('number') }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput6">Position</label>
                    <select class="select2-B form-control @error('position') border border-danger @enderror" name="position">
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
                    @error('position')
                    <p class="help text-danger">{{ $errors->first('position') }}</p>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Player Image</label>
                    <input type="file" name="player_image" class="form-control-file">
                    @error('player_image')
                    <p class="help text-danger">{{ $errors->first('player_image') }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">About</label>
                    <textarea id="" rows="7" class="form-control @error('about') border border-danger @enderror" name="about" placeholder="About Player"></textarea>
                    @error('post_image')
                    <p class="help text-danger">{{ $errors->first('about') }}</p>
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
