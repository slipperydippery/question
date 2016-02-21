<?php

use Illuminate\Database\Seeder;

class QuestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('quests')->delete();

        $quests = [
        ];

        DB::table('quests')->insert($quests);
    }
}
