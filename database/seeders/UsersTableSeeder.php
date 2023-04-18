<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run(): void
    {
        if (User::count() == 0) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ]);

            for ($i = 1; $i < 5; $i++) {
                User::create([
                    'name' => 'User' . $i,
                    'email' => 'user' . $i . '@admin.com',
                    'password' => bcrypt('12345678'),
                    'remember_token' => Str::random(60),
                ]);
            }
        }
    }
}
