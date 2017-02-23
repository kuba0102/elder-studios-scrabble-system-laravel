<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pl_Members')->insert(['member_name' => 'Mike','member_last_name' => 'Smith','member_mobile_number' => 0111104505, 'member_date_joined'=>date('2014-03-15')]);
    }
}
