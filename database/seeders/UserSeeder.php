<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin#1234')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user#1234')
        ]);
        $user->assignRole('user');

        $operator = User::create([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('operator#1234')
        ]);
        $operator->assignRole('operator');
    }
}
