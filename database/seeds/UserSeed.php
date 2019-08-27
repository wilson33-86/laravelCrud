<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\User;
use \App\Profession;


class UserSeed extends Seeder
{
    /*
	* @return void

	*/
    public function run()

    {
         
    	//$profession = DB::select('select id from professions where name=?',['Desarrollador Front-end']);

    	//$profession = DB::table('professions')->select('id')->first();

    	$professionId = Profession::where('name','Desarrollador Front-end')->value('id');
             
            
          User::create([
        	'name'=>'wilson',
        	'email'=>'wil@gmail.com',
        	'password'=>bcrypt('123'),
            'profession_id'=>$professionId
        ]);
       
        factory(User::class)->create([
         'profession_id'=>$professionId
        ]);

        factory(User::class, 48)->create();

        /*   
        DB::table('users')->insert([
        	'name'=>'wilson',
        	'email'=>'wil@gmail.com',
        	'password'=>bcrypt('123'),
            'profession_id'=>$professionId
        ]);*/
    }
}
