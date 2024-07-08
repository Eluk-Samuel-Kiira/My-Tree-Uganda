<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ashraf Enjer',
            'email' => 'ashrafenjer1@gmail.com',
            'password' => bcrypt('1234567890'),
            'phone' => '0760415446',
            'role' => 'admin',
            'status' => '1',
            'deleted' => '0',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Ismeal Tamale',
            'email' => 'ismaeltamale@gmail.com',
            'password' => bcrypt('1234567890'),
            'phone' => '0783688997',
            'role' => 'admin',
            'status' => '1',
            'deleted' => '0',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Stardena',
            'email' => 'info@stardena.com',
            'password' => bcrypt('1234567890'),
            'phone' => '0776263482',
            'role' => 'admin',
            'status' => '1',
            'deleted' => '0',
        ]);
    }
}
