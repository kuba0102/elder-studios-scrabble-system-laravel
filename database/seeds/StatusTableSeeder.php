<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pl_status')->insert(['status_name'=>'Win','status_description'=>'Player has scored more points then his opponent.']);
        DB::table('pl_status')->insert(['status_name'=>'Loss','status_description'=>'Player has scored less points then his opponent.']);
        DB::table('pl_status')->insert(['status_name'=>'Draw','status_description'=>'Both players have same score.']);
    }
}
