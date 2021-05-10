<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcript('admin'),
        	'password' => Str::random(10),
        ]);
    }
}
