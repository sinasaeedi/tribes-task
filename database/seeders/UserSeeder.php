<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrcreate(
            ['email' => 'saeedi.sina@gmail.com'],
            [
                'name'     => 'Sina Saeedi',
                'password' => Hash::make('password.123'),
            ]
        );
    }
}
