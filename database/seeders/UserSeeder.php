<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
        User::factory(10)->create()->each(function ($user) {
            Post::factory(15)->create(['user_id' => $user->id])->each(function ($post) {
               Comment::factory(5)->create(['post_id' => $post->id]);
            });
        });
    }
}
