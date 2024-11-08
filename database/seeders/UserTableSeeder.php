<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'id'        => 1,
                'name'      => 'Admin',
                'email'     => 'admin@admin.com',
                'password'       => bcrypt('password'),
            ],
            [
                'id'        => 2,
                'name'      => 'Sub Admin',
                'email'     => 'admin@gmail.com',
                'password'       => bcrypt('password'),
            ],
        ];
        User::insert($users);
    }
}
