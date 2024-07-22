<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Break_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call(BreaksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AttendancessTableSeeder::class);
    }
}
