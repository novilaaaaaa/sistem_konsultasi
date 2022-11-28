<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'level' => 'admin'
        ]);
        $this->call([
            DokterSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
