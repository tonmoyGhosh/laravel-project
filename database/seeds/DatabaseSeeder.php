<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\League;
use App\Team;
use App\Player;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    { 
         User::create([

         	'name'  => 'Contest Owner',
         	'email' => 'contest@owner.com',
         	'password' => bcrypt('1234'),
         	'type'  => 'contest_owner',

         ]);

         User::create([

         	'name'  => 'Team Owner',
         	'email' => 'team@owner.com',
         	'password'  => bcrypt('1234'),
         	'type'  => 'team_owner',

         ]);

         User::create([

         	'name'  => 'Player One',
         	'email' => 'player@one.com',
         	'password'  => bcrypt('1234'),
         	'type'  => 'player',

         ]);


         League::create([

         	 'title'  => 'League a',
             'team_id' => 1,
         	 
         ]);

         League::create([

         	 'title'  => 'League b',
             'team_id' => 1,
         	 
         ]);

         League::create([

         	 'title'  => 'League c',
             'team_id' => 1,
         	 
         ]);

         League::create([

         	 'title'  => 'League d',
             'team_id' => 1,
         	 
         ]);

         League::create([

         	 'title'  => 'League e',
             'team_id' => 2,
         	 
         ]);

         League::create([

         	 'title'  => 'League f',
             'team_id' => 2,
         	 
         ]);

         League::create([

         	 'title'  => 'League g',
             'team_id' => 3,
         	 
         ]);
        
         League::create([

         	 'title'  => 'League h',
             'team_id' => 4,
         	 
         ]);

         Team::create([

         	'name' => 'Team A',
         	 'user_id' => 1,
         	
		 ]);

         Team::create([

         	'name' => 'Team B',
         	 'user_id' => 1,
         	

         ]);


         Team::create([

         	'name' => 'Team C',
         	 'user_id' => 1,

         ]);

         Team::create([

         	'name' => 'Team D',
         	 'user_id' => 2,

         ]);

         Team::create([

         	'name' => 'Team E',
         	 'user_id' => 2,

         ]);

         Team::create([

         	'name' => 'Team F',
         	 'user_id' => 3,

         ]);

         Team::create([

         	'name' => 'Team G',
         	 'user_id' => 3,

         ]);

         Team::create([

         	'name' => 'Team H',
         	 'user_id' => 2,

         ]);

         Player::create([

         	'name'  => 'Player One',
         	'team_id' => 1

         ]);

         Player::create([

         	'name'  => 'Player Two',
         	'team_id' => 1

         ]);

         Player::create([

         	'name'  => 'Player Three',
         	'team_id' => 1

         ]);

         Player::create([

         	'name'  => 'Player Four',
         	'team_id' => 2

         ]);

          Player::create([

         	'name'  => 'Player Five',
         	'team_id' => 3

         ]);


         
    }
}
