<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
        // \App\Models\User::factory(10)->create();
        $user = \App\Models\User::factory()->create([
            'name' => 'Kaka',
            'email' => 'kaka@mail.com'
        ]);
        $user = \App\Models\User::factory()->create([
             'name' => 'Sandra',
             'email' => 'sandra.sygav@tptlive.ee'
        ]);

        Role::create(['name'=> 'admin']);
        $user->assignRole('admin');
    }
}
