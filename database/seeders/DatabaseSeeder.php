<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'danang Prenadi',
            'username' => 'dprenadi',
            'email' => 'dprenadi@gmail.com',
            'password' => bcrypt('password')
        ]);

    }
}
