<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Admin',
            'email' => 'admin@bhfilm.ba',
            'password' => bcrypt('admin')
        ];

        User::firstOrCreate([
            'email' => $user['email']
        ], $user);
    }
}
