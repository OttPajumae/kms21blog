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
        $user = new User();
        $user->name = env('DEFAULT_USER_NAME', 'User McUserFace');
        $user->email = env('DEFAULT_USER_EMAIL', 'user@user.user');
        $user->password = env('DEFAULT_USER_PASSWORD', bcrypt('password'));
        $user->save();
        User::factory(10)->create();
    }
}
