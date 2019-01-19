<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts= [[
            'id'    =>  1,
            'description'   =>  'admin@admin',
            'users_id'  =>  1,
            'contact_types_id'  =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ], [
            'id'    =>  2,
            'description'   =>  'user@user',
            'users_id'  =>  2,
            'contact_types_id'  =>  1,
            'created_at'    =>  date("Y-m-d H:i:s"),
        ]];

        DB::table('contacts')->delete();
        foreach ($contacts as $contact){
            DB::table('contacts')->insert($contact);
        }
    }
}
