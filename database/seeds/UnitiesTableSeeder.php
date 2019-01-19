<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unities = [[
            'id'    =>  1,
            'name'  =>  'Administration',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'name'  =>  'Users',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('unities')->delete();
        foreach ($unities as $unity){
            DB::table('unities')->insert($unity);
        }
    }
}
