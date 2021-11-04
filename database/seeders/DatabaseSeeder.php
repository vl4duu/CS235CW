<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                //This one works
        // $user = \App\Models\User::factory(3)
        //     ->has(\App\Models\Post::factory()->count(3))
        //     ->create();

        $user = Comment::factory()
            ->for()
        
    }
}
