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
        User::create([
            'name' => 'Andrew',
            'email' => 'dkyshka25@gmail.com',
            'password' => '123456',
            'role' => 'admin',
            'phone' => '+998909037045'
        ]);

        User::create([
            'name' => 'Petya',
//            'group_id' => 1,
            'email' => 'petya@gmail.com',
            'password' => '123456',
            'phone' => '+999933333'
        ]);

        User::create([
            'name' => 'Kristi',
//            'group_id' => 1,
            'email' => 'kristi@gmail.com',
            'password' => '123456',
            'phone' => '+9994444'
        ]);

        User::create([
            'name' => 'Jhon',
//            'group_id' => 2,
            'email' => 'jhon@gmail.com',
            'password' => '123456',
            'phone' => '+999466666'
        ]);

        User::create([
            'name' => 'Antony',
//            'group_id' => 3,
            'email' => 'antony@gmail.com',
            'password' => '123456',
            'phone' => '+999423234'
        ]);

        User::create([
            'name' => 'Arnold',
//            'group_id' => 3,
            'email' => 'arnold@gmail.com',
            'password' => '123456',
            'phone' => '+9994237788'
        ]);
    }
}
