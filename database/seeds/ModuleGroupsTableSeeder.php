<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module_groups = [[
            'id'    =>  1,
            'modules_id'    =>  1,
            'groups_id'    =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'modules_id'    =>  2,
            'groups_id'    =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  3,
            'modules_id'    =>  2,
            'groups_id'    =>  2,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('module_groups')->delete();
        foreach ($module_groups as $module_group){
            DB::table('module_groups')->insert($module_group);
        }
    }
}
