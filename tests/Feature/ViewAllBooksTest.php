<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewAllBooksTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_all_books_can_be_viewed()
    {
        $books = Book::factory()->create();

        $response = $this->get(route('books.index'));

        $titles = $books->pluck('title')->toArray();
        $authors = $books->pluck('author')->toArray();

        $response->assertStatus(200)
            ->assertSeeTextInOrder($titles)
            ->assertSeeTextInOrder($authors);
    }
}