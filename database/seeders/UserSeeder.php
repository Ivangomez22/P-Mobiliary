<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Ivan Gomez Hernandez',
            'email' => 'ivan22march@gmail.com',
            'password' => bcrypt('87654321'),
        ]);
    }
}
