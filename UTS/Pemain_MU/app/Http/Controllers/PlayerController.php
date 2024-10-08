<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function main() {
        $players = player::all();

        return view('index', compact('players'));
    }
}
