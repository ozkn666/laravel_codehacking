<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['administrator', 'auther', 'subscriber'];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role
            ]);
        }
    }
}
