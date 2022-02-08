<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewPostIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_published_posts_can_be_viewed()
    {
        $publishedPosts = Post::factory()->times(2)->published()->create();
        $unpublishedPosts = Post::factory()->times(2)->unpublished()->create();

        $this->get(route('posts.index'))
            ->assertOk()
            ->assertSee($publishedPosts[0]->title)
            ->assertSee($publishedPosts[1]->title)
            ->assertDontSeeText($unpublishedPosts[0]->title)
            ->assertDontSeeText($unpublishedPosts[1]->title)
        ;
    }

    public function test_unpublished_posts_can_be_viewed_by_its_owner()
    {
        /** @var Authenticatable $owner */
        $owner = User::factory()->create();
        $unpublishedPosts = Post::factory()->times(2)->unpublished()->make();

        $owner->posts()->saveMany($unpublishedPosts);

        $this->actingAs($owner)
            ->get(route('posts.index'))
            ->assertSeeText($unpublishedPosts[0]->title)
            ->assertSeeText($unpublishedPosts[1]->title)
        ;
    }
}
