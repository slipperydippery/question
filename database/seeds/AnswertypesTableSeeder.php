<?php

use Illuminate\Database\Seeder;

class AnswertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('answertypes')->delete();

        $answertypes = [
        	[
        		'name' => 'text',
        	],
        	[
        		'name' => 'radio',
        	],
        	[
        		'name' => 'checkbox',
        	]
        ];

        DB::table('answertypes')->insert($answertypes);
    }
}
