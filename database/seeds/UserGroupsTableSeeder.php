<?php

use Illuminate\Database\Seeder;

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_groups= [[
            'id'    =>  1,
            'users_id'  =>  1,
            'groups_id'  =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'users_id'  =>  1,
            'groups_id'  =>  2,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  3,
            'users_id'  =>  2,
            'groups_id'  =>  2,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('user_groups')->delete();
        foreach ($user_groups as $user_group){
            DB::table('user_groups')->insert($user_group);
        }
    }
}
