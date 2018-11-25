<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\League;
use App\Team;
use App\Player;

class League extends Model
{
    protected $fillable = [
        'name'
    ];
  
   
}
