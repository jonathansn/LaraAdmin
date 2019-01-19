<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [[
            'id'    =>  1,
            'name'  =>  'Administrator',
            'email' =>   'admin@admin.com',
            'password'  =>  bcrypt('admin'),
            'status'    =>  1,
            'unities_id'    =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'name'  =>  'User',
            'email' =>   'user@user.com',
            'password'  =>  bcrypt('user'),
            'status'    =>  1,
            'unities_id'    =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('users')->delete();
        foreach ($users as $user){
            DB::table('users')->insert($user);
        }
    }
}
