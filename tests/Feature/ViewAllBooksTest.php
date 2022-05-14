<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewAllBooksTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_published_books_can_be_viewed()
    {
        $books = Book::factory()->times(3)->published()->create();

        $response = $this->get(route('books.index'));

        $titles = $books->pluck('title')->toArray();
        $authors = $books->pluck('author')->toArray();
        $linksToIndividualBooks = $books->map(function (Book $book) {
            return route('books.show', $book);
        })
            ->toArray();

        $response->assertStatus(200)
            ->assertSeeTextInOrder($titles)
            ->assertSeeTextInOrder($authors)
            ->assertSeeInOrder($linksToIndividualBooks);
    }

    public function test_unpublished_books_cannot_be_viewed_by_guests()
    {
        $book = Book::factory()->unpublished()->create();

        $response = $this->get(route('books.index'));

        $response->assertStatus(200)
            ->assertDontSeeText($book->title);
    }
}
