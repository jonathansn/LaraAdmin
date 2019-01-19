<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [[
            'id'    =>  1,
            'name'  =>  'Module Admin',
            'control_class'  =>  'ModuleAdminController',
            'db_name'  =>  'db_admin_module',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'name'  =>  'Module User',
            'control_class'  =>  'ModuleUserController',
            'db_name'  =>  'db_user_module',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('modules')->delete();
        foreach ($modules as $module){
            DB::table('modules')->insert($module);
        }
    }
}
