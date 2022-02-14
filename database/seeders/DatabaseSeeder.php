<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        User::factory(10)->create();

        User::create([  
            'name'=> 'Lucas',
            'email' => 'admin@hotmail.com',
            'password' => bcrypt('123456789')
    ])->assignRole('admin');

        Curso::factory(50)->create();
    }
}
