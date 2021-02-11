@extends('layouts.admin')

@section('nav')

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

<li class="nav-item active">
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


@section( 'content')

@if(Session::has('deleted-message'))
<div class="alert alert-danger"> {{ Session::get('deleted-message') }}</div>
@endif

@if(Session::has('updated-message'))
<div class="alert alert-info"> {{ Session::get('updated-message') }}</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Players</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Team</th>
                        <th>Matches</th>
                        <th>Wins</th>
                        <th>Loss</th>
                        <th>Draws</th>
                        <th>Points</th>
                        <th>Goal Difference</th>
                        <th>Team Logo</th>
                        <th>Delete&Update</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($scores as $score)
                    <tr>
                        <td>{{ $score->team }}</td>
                        <td>{{ $score->matches }}</td>
                        <td>{{ $score->wins }}</td>
                        <td>{{ $score->loss }}</td>
                        <td>{{ $score->draws }}</td>
                        <td>{{ $score->points }}</td>
                        <td>{{ $score->goal_difference }}</td>
                        <td><img src="/images/{{ $score->team_logo }}" width="150" height="150"></td>
                        <td>
                            <form method="post" action="{{ route('score.destroy',$score->id) }}">
                                @csrf
                                @method('delete')
                                <div>
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </div>
                            </form>
                            <div class="mt-4">
                                <div class="mt-4">
                                    <a href="{{ route('score.edit',$score->id) }}"> <button type="submit" class="btn btn-info">UPDATE</button></a>
                                </div>

                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section( 'scripts')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
