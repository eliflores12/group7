<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'owner@example.com',
            'password' => 'password',
            'role_id' => 1
        ]);

        User::factory()->create([
            'email' => 'client@example.com',
            'password' => 'password',
            'role_id' => 2
        ]);

        User::factory(25)->create();
    }
}
