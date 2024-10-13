<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = user::create([
            'name' => 'admin',
            'email' => 'admin@moonton.com',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');
    }
}
