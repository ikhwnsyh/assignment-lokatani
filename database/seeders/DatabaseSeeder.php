<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Database\Factories\UserFactory;
use FFI;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Siswa::factory(10)->create();
    }
}
