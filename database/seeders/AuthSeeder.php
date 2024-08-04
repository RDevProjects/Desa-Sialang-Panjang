<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'KKN-TEMATIK UNISI 24',
            'email' => 'kkn-unisi24@gmail.com',
            'password' => bcrypt('kkn-unisi24@pass'),
        ]);
    }
}
