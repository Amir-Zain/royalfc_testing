<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use App\Models\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $galleries = Gallery::all();
        $image = Image::find(1);
        return view('frontend.index', compact('players', 'galleries', 'image'));
    }
}
