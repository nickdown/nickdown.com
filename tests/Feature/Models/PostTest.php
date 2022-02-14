<?php

namespace Tests\Feature\Models;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_has_a_url()
    {
        $post = Post::factory()->published()->create();

        $this->get($post->url())
            ->assertSee($post->title);
    }
}
