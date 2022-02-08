<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostPolicyTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_view_any_posts()
    {
        $user = User::factory()->create();

        $this->assertTrue(app(PostPolicy::class)->viewAny($user));
    }

    public function test_a_guest_can_view_any_posts()
    {
        $this->assertTrue(app(PostPolicy::class)->viewAny(null));
    }

    public function test_a_stranger_can_view_a_published_post()
    {
        $stranger = User::factory()->create();
        $post = Post::factory()->published()->create();

        $this->assertTrue(app(PostPolicy::class)->view($stranger, $post));
    }

    public function test_a_guest_can_view_a_published_post()
    {
        $post = Post::factory()->published()->create();

        $this->assertTrue(app(PostPolicy::class)->view(null, $post));
    }

    public function test_a_user_can_CRUD_their_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->unpublished()->make();

        $user->posts()->save($post);


        $this->assertTrue(app(PostPolicy::class)->create($user));
        $this->assertTrue(app(PostPolicy::class)->view($user, $post));
        $this->assertTrue(app(PostPolicy::class)->update($user, $post));
        $this->assertTrue(app(PostPolicy::class)->delete($user, $post));
        $this->assertTrue(app(PostPolicy::class)->restore($user, $post));
        $this->assertTrue(app(PostPolicy::class)->forceDelete($user, $post));
    }

    public function test_a_stranger_can_CRUD_a_post()
    {
        $stranger = User::factory()->create();
        $post = Post::factory()->unpublished()->create();

        $this->assertFalse(app(PostPolicy::class)->view($stranger, $post));
        $this->assertFalse(app(PostPolicy::class)->update($stranger, $post));
        $this->assertFalse(app(PostPolicy::class)->delete($stranger, $post));
        $this->assertFalse(app(PostPolicy::class)->restore($stranger, $post));
        $this->assertFalse(app(PostPolicy::class)->forceDelete($stranger, $post));
    }
}
