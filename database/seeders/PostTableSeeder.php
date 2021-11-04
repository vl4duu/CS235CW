<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = new Post;
        $i->message = "New message!";
        $i->user_id = 1;
        $i->save();
        
    }
}
