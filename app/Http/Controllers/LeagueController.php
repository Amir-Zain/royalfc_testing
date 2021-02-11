<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\LeagueScoreboard;
use App\Models\LeagueTeam;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index()
    {
        $mainImage = Image::find(3);
        $scores = LeagueScoreboard::orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
        $teams = LeagueTeam::all();
        return view('frontend.league', compact(['mainImage', 'scores', 'teams']));
    }
}
