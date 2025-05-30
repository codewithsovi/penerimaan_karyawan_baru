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
                'name' => 'ryuki',
                'email' => 'ryuki@gmail.com',
                'password' => Hash::make('hrd123'),
                'role' => 'hrd',
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'dela',
                'email' => 'dela@gmail.com',
                'password' => Hash::make('091192'),
                'role' => 'pelamar',
            ]
        ]);
    }}
