<?php

use Illuminate\Database\Seeder;

class AccessLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $access_logs= [[
            'id'    =>  1,
            'users_id' => 1,
            'email'   =>  'admin@admin.com',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'users_id' => 2,
            'email'   =>  'user@user.com',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('access_logs')->delete();
        foreach ($access_logs as $access_log){
            DB::table('access_logs')->insert($access_log);
        }
    }
}
