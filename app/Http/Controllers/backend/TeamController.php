<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\LeagueTeam;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = LeagueTeam::all();
        return view('backend.team.view-teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create-team');
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
            'manager' => 'required',
            'assist' => 'required',
            'icon_player' => 'required',
            'manager_image' => ['required', 'file'],
            'assist_image' => ['required', 'file'],
            'icon_player_image' => ['required', 'file'],
            'team_logo' => ['required', 'file'],

        ]);

        if ($request['manager_image'] && $request['assist_image'] && $request['icon_player_image'] && $request['team_logo']) {
            $file = $request->file('manager_image');
            $file2 = $request->file('assist_image');
            $file3 = $request->file('icon_player_image');
            $file4 = $request->file('team_logo');
            $manager_image = $file->getClientOriginalName();
            $assist_image = $file2->getClientOriginalName();
            $icon_player_image = $file3->getClientOriginalName();
            $team_logo = $file4->getClientOriginalName();
            $inputs['manager_image'] = $manager_image;
            $inputs['assist_image'] = $assist_image;
            $inputs['icon_player_image'] = $icon_player_image;
            $inputs['team_logo'] = $team_logo;
            $file->move('images', $manager_image);
            $file2->move('images', $assist_image);
            $file3->move('images', $icon_player_image);
            $file4->move('images', $team_logo);
        }

        LeagueTeam::create($inputs);
        session()->flash('add-message', 'New League Team was added');
        return redirect()->route('team.create');
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
        $team =  LeagueTeam::find($id);
        return view('backend.team.edit', compact('team'));
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
            'manager' => 'required',
            'assist' => 'required',
            'icon_player' => 'required',
            'manager_image' => ['required', 'file'],
            'assist_image' => ['required', 'file'],
            'icon_player_image' => ['required', 'file'],
            'team_logo' => ['required', 'file'],

        ]);

        if ($request['manager_image'] && $request['assist_image'] && $request['icon_player_image'] && $request['team_logo']) {
            $file = $request->file('manager_image');
            $file2 = $request->file('assist_image');
            $file3 = $request->file('icon_player_image');
            $file4 = $request->file('team_logo');
            $manager_image = $file->getClientOriginalName();
            $assist_image = $file2->getClientOriginalName();
            $icon_player_image = $file3->getClientOriginalName();
            $team_logo = $file4->getClientOriginalName();
            $inputs['manager_image'] = $manager_image;
            $inputs['assist_image'] = $assist_image;
            $inputs['icon_player_image'] = $icon_player_image;
            $inputs['team_logo'] = $team_logo;
            $file->move('images', $manager_image);
            $file2->move('images', $assist_image);
            $file3->move('images', $icon_player_image);
            $file4->move('images', $team_logo);
        }
        LeagueTeam::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The Team was updated');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LeagueTeam::find($id)->delete();
        session()->flash('deleted-message', 'League Team Removed Succesfully');
        return redirect()->route('team.index');
    }
}
