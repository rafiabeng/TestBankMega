<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'username' => 'nasabah',
            'password' =>  Hash::make('123'),
            'role' => 1
        ],[
            'role_name' => 'admin',
            'password' =>  Hash::make('123'),
            'role' => 2
        ]]);
    }
}