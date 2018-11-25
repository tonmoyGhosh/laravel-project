<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\League;
use App\Team;
use App\Player;

class Team extends Model
{
    protected $fillable = [
        'name', 'league_id', 'user_id'
    ];

    public function players(){

    	return $this->hasMany(Player::class);
    }

    public function leagues(){

    	return $this->hasMany(League::class);
    }

}
