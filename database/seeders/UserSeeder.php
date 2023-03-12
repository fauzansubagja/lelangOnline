<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'Administrator',
            'email' => 'admin@gmail.com',
            'telp' => '0821',
            'role' => 'Admin',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Petugas',
            'username' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'telp' => '0822',
            'role' => 'Petugas',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Ozan',
            'username' => 'Ozansang',
            'email' => 'ozan@gmail.com',
            'telp' => '0823',
            'role' => 'User',
            'password' => bcrypt('password'),
        ]);
    }
}