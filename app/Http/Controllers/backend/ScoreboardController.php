<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\LeagueScoreboard;
use App\Models\LeagueTeam;
use Illuminate\Http\Request;

class ScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores =
            LeagueScoreboard::orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
        return view('backend.scoreboard.view-scoreboard', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = LeagueTeam::all();
        return view('backend.scoreboard.create-scoreboard', compact('teams'));
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
            'team' => "required",
            'wins' => 'required',
            'loss' => 'required',
            'draws' => 'required',
            'matches' => 'required',
            'goal_difference' => 'required',
            'points' => 'required',
            'team_logo' => ['required', 'file'],

        ]);
        if ($inputs['team_logo']) {
            $file = $request->file('team_logo');
            $team_logo = $file->getClientOriginalName();
            $inputs['team_logo'] = $team_logo;
            $file->move('images', $team_logo);
        }

        LeagueScoreboard::create($inputs);
        session()->flash('add-message', 'New Ranking Added');
        return redirect()->route('score.create');
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
        $score =  LeagueScoreboard::find($id);
        return view('backend.scoreboard.edit', compact('score'));
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
            'team' => "required",
            'wins' => 'required',
            'loss' => 'required',
            'draws' => 'required',
            'matches' => 'required',
            'goal_difference' => 'required',
            'points' => 'required',

        ]);
        LeagueScoreboard::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The Ranking was updated');
        return redirect()->route('score.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LeagueScoreboard::find($id)->delete();
        session()->flash('deleted-message', 'Ranking Removed Succesfully');
        return redirect()->route('score.index');
    }
}
