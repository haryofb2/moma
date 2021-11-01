<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data = [
                [
                    'name' => 'administrator',
                ],
                [
                    'name' => 'guest',
                ],

            ];
            foreach ($data as $d) {
                DB::table('roles')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}
