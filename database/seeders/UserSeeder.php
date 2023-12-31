<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 3)->create();
        \App\Models\User::factory()->count(3)->create()->each(function($user) {

            $address = \App\Models\Address::factory()->make();
            $user->address()->save($address);
        });

     
    }
}
