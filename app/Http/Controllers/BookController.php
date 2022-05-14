<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::published()->get();

        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        if (!$book->published_at) {
            abort(404);
        }
        return view('books.show', compact('book'));
    }
}
