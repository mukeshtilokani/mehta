<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remove all old data
        User::truncate();

        User::create([
        	'name' => 'Parth',
        	'email' => 'shahparth39@yahoo.com',
        	'password' => bcrypt('password'),
        ]);

        User::create([
        	'name' => 'Mukesh',
        	'email' => 'mukeshtilokani@gmail.com',
        	'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Sunny',
            'email' => 'shethsunny@outlook.com',
            'password' => bcrypt('password'),
        ]);        
    }
}
