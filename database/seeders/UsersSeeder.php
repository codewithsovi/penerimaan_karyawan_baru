<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'novenjr',
                'username' => 'novenjr',
                'email' => 'novenjr@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'hrd',
            ]
        ]);
    }}
