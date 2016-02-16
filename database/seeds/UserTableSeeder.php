<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        $users = [
        	[
        		'name' => 'Maarten',
        		'email' => 'maartendejager@gmail.com',
        		'password' => Hash::make('password1'),
        	]
        ];

        DB::table('users')->insert($users);
    }
}
