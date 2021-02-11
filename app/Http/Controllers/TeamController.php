<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\LeaguePlayer;
use App\Models\LeagueTeam;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $mainImage = Image::find(3);
        $team = LeagueTeam::find($id);
        $players = LeaguePlayer::where('team', $team->team)->get();
        return view('frontend.team', compact(['mainImage', 'team', 'players']));
    }

    // public function show($id)
    // {
    //     $team = LeagueTeam::find($id);
    //     return view('frontend.team', compact('team'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
