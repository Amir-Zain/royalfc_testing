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
<li class="nav-item active">
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
<li class="nav-item">
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
<h2 class="h3 mb-4 text-gray-800">Change About Image</h2>
@if(Session::has('updated-message'))
<div class="alert alert-info"> {{ Session::get('updated-message') }}</div>
@endif
<form action="{{ route('about.update',$data->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @csrf
    @method('put')
    <div class="form-body">
        <div class="row">



            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file" required>
                    @error('image')
                    <p class="help text-danger">{{ $errors->first('image') }}</p>
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
