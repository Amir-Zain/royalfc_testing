<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('backend.player.view-players', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.player.create-players');
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
            'name' => 'required',
            'age' => 'required',
            'number' => 'required',
            'position' => 'required',
            'about' => 'required',
            'player_image' => ['required', 'file'],
        ]);

        if ($request['player_image']) {
            $file = $request->file('player_image');
            $image = $file->getClientOriginalName();
            $inputs['player_image'] = $image;
            $file->move('images', $image);
        }
        Player::create($inputs);
        session()->flash('add-message', 'New Player was added');
        return redirect()->route('player.create');
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
        $player =  Player::find($id);
        return view('backend.player.edit', compact('player'));
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
            'name' => 'required',
            'age' => 'required',
            'number' => 'required',
            'position' => 'required',
            'about' => 'required',
            'player_image' => ['required', 'file'],
        ]);
        if ($request['player_image']) {
            $file = $request->file('player_image');
            $image = $file->getClientOriginalName();
            $inputs['player_image'] = $image;
            $file->move('images', $image);
        }

        Player::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The Player was updated');
        return redirect()->route('player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::find($id)->delete();
        session()->flash('deleted-message', 'Player Removed Succesfully');
        return redirect()->route('player.index');
    }
}
