<?php

namespace App\Http\Controllers;

use App\Models\LeaguePlayer;
use App\Models\LeagueTeam;
use Illuminate\Http\Request;

class LeaguePlayerController extends Controller
{
    public function index()
    {
        $players = LeaguePlayer::all();
        return view('backend.league-player.view-leaguePlayers', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = LeagueTeam::all();
        return view('backend.league-player.create-leaguePlayers', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs =  request()->validate([
            'team' => 'required',
            'player_name' => 'required',
            'player_position' => 'required',
            'player_number' => 'required',
            'player_image' => ['required', 'file'],
        ]);

        if ($request['player_image']) {
            $file = $request->file('player_image');
            $image = $file->getClientOriginalName();
            $inputs['player_image'] = $image;
            $file->move('images', $image);
        }
        LeaguePlayer::create($inputs);
        session()->flash('add-message', 'New LeaguePlayer was added');
        return redirect()->route('leaguePlayer.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player =  LeaguePlayer::find($id);
        return view('backend.league-player.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs =  request()->validate([
            'team' => 'required',
            'player_name' => 'required',
            'player_position' => 'required',
            'player_number' => 'required',
            'player_image' => ['required', 'file'],
        ]);

        if ($request['player_image']) {
            $file = $request->file('player_image');
            $image = $file->getClientOriginalName();
            $inputs['player_image'] = $image;
            $file->move('images', $image);
        }

        LeaguePlayer::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The League Player was updated');
        return redirect()->route('leaguePlayer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LeaguePlayer::find($id)->delete();
        session()->flash('deleted-message', 'League Player Removed Succesfully');
        return redirect()->route('leaguePlayer.index');
    }
}
