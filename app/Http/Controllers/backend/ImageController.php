<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $homeImage = Image::find(1);
        return view('backend.interface.home.index', compact('homeImage'));
    }

    public function league()
    {
        $leagueImage = Image::find(3);
        return view('backend.interface.league.index', compact('leagueImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $aboutImage = Image::find(2);
        return view('backend.interface.about.index', compact('aboutImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editHome($id)
    {
        $data = Image::find($id);
        return view('backend.interface.home.edit', compact('data'));
    }

    public function editLeague($id)
    {
        $data = Image::find($id);
        return view('backend.interface.league.edit', compact('data'));
    }

    public function editAbout($id)
    {
        $data = Image::find($id);
        return view('backend.interface.about.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateHome(Request $request, $id)
    {
        $inputs = $request->validate(
            [
                'image' => ['required', 'file']
            ]
        );
        if ($request['image']) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $inputs['image'] = $image;
            $file->move('images', $image);
        }

        Image::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The Image was changed');
        return redirect()->route('home.index');
    }

    public function updateAbout(Request $request, $id)
    {
        $inputs = $request->validate(
            [
                'image' => ['required', 'file']
            ]
        );
        if ($request['image']) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $inputs['image'] = $image;
            $file->move('images', $image);
        }

        Image::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The Image was changed');
        return redirect()->route('about.index');
    }

    public function updateLeague(Request $request, $id)
    {
        $inputs = $request->validate(
            [
                'image' => ['required', 'file']
            ]
        );
        if ($request['image']) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $inputs['image'] = $image;
            $file->move('images', $image);
        }

        Image::find($id)->update($inputs);
        // auth()->user()->posts()->save($post);
        session()->flash('updated-message', 'The Image was changed');
        return redirect()->route('league.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
