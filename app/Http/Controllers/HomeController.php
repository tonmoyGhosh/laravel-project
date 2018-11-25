<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\League;
use App\Team;
use App\Player;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = Auth::user()->id;

        $user_type = User::select('type')->where('id', $user_id)->first();

        if($user_type->type == "contest_owner"){

            $all_records = Team::with('leagues')->with('players')->where('user_id', $user_id)->get();

            return view('all-list', compact('all_records'));

        }else if(($user_type->type == "team_owner")){

            $players = Player::all();

            return view('player-list', compact('players'));

        }else if($user_type->type == 'player'){

            $teams = Team::with('leagues')->where('user_id', $user_id)->get();

            return view('team-list', compact('teams'));
        }

    }
}
