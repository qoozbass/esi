<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(30)->create();
        // UserSeeder::class,
        // Eloquent::unguard();
        // $this->call(UserSeeder::class);
        User::create([
            'name' => 'Sample Name',
            'email' => 'test@demo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass1234'), // password
            'remember_token' => 'aaaaaaa',
       ]);
    }
}
