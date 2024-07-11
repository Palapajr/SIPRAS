<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mas Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('123'),
            ],
            [
                'name'=>'Mas User',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>Hash::make('123'),
            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
