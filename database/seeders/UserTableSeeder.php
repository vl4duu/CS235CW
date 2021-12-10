<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
      $user = \App\Models\User::factory(3)
            ->has(\App\Models\Post::factory()->count(3))
            ->create();
    }
}
