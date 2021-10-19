<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            [
                'first_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123456',
                'is_admin' => '1',
            ],
            [
                'first_name' => 'User',
                'email' => 'user@gmail.com',
                'password' => '13456',
                'is_admin' => null,
            ],
            [
                'first_name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => '13456',
                'is_admin' => null,
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'first_name' => $user['first_name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}
