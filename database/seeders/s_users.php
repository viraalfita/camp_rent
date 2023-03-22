<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class s_users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Vira Alfita',
            'email' => 'viraanjayyy@gmail.com',
            'password' => Hash::make('viracantik'),
            'is_admin' => '1'
        ]);
    }
}
