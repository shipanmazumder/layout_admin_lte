<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "Super Admin",
            "type" => "system"
        ]);
        DB::table('roles')->insert([
            'name' => "Admin",
            "type" => "system"
        ]);
        DB::table('roles')->insert([
            'name' => "Users",
            "type" => "system"
        ]);
    }
}
