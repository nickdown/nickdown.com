<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $nick = User::factory()->create([
            'name' => 'Nick',
            'email' => 'nick@nickdown.com'
        ]);

        $posts = Post::factory()->times(10)->published()->make();
        $nick->posts()->saveMany($posts);

        $unpublishedPosts = Post::factory()->times(5)->unpublished()->make();
        $nick->posts()->saveMany($unpublishedPosts);
    }
}
