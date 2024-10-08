<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        $players = player::all();

        return view('index', compact('players'));
    }
}
