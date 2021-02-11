<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Player;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $mainImage = Image::find(1);
        $aboutImage = Image::find(2);
        return view('frontend.about', compact('players', 'mainImage', 'aboutImage'));
    }
}
