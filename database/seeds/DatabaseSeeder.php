<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UnitiesTableSeeder::class,
            GroupsTableSeeder::class,
            UsersTableSeeder::class,
            UserGroupsTableSeeder::class,
            ContactTypesTableSeeder::class,
            ContactsTableSeeder::class,
            ModulesTableSeeder::class,
            ModuleGroupsTableSeeder::class,
            AccessLogsTableSeeder::class,
            //PasswordResetsTableSeeder::class,
        ]);
    }
}
