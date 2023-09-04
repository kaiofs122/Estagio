<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Kaio',
            'lastName' => 'Fernandes',
            'email' => 'Kaiofs122@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
