<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_published_post_can_be_viewed()
    {
        $post = Post::factory()->published()->create();

        $this->get(route('posts.show', $post))
            ->assertOk()
            ->assertSeeText($post->title)
            ->assertSeeText($post->body);
    }

    public function test_an_unpublished_post_cannot_be_viewed()
    {
        $post = Post::factory()->unpublished()->create();

        $this->get(route('posts.show', $post))
            ->assertForbidden()
            ->assertDontSeeText($post->title);
    }

    public function test_an_unpublished_post_can_be_viewed_by_its_owner()
    {
        $owner = User::factory()->create();
        $post = Post::factory()->unpublished()->make();

        $owner->posts()->save($post);

        $this->actingAs($owner)
            ->get(route('posts.show', $post))
            ->assertForbidden()
            ->assertDontSeeText($post->title);
    }
}
