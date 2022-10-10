<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admins;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Admins::insert([
            'admin_name'=>'SuperAdmin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
