<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_types')->insert([
            'id'    =>  1,
            'description'   =>  'email',
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]);
    }
}
