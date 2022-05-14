<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewBookTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_published_book_can_be_viewed()
    {
        $book = Book::factory()->published()->create();

        $response = $this->get(route('books.show', $book));

        $response->assertStatus(200)
            ->assertSeeText($book->title)
            ->assertSeeText($book->author)
            ->assertSeeText($book->description);
    }

    public function test_unpublished_books_cannot_be_viewed_by_guests()
    {
        $book = Book::factory()->unpublished()->create();

        $response = $this->get(route('books.show', $book));

        $response->assertStatus(404);
    }
}
