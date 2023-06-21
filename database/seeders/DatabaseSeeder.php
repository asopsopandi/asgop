<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profil;
use App\Models\Portopolio;

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
        User::create([
            'name' => 'asop',
            'email' => 'asop@gmail.com',
            'password' => bcrypt('asop31')
        ]);
    }
}
