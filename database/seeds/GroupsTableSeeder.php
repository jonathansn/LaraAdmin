<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [[
            'id'    =>  1,
            'name'  =>  'Administrator',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'name'  =>  'User',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('groups')->delete();
        foreach ($groups as $group){
            DB::table('groups')->insert($group);
        }
    }
}
