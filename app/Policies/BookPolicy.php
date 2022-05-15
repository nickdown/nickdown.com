<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class BookPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return true;
    }

    public function view(User $user, Book $book): Response|bool
    {
        return $user->isAdmin();
    }

    public function create(User $user): Response|bool
    {
        return $user->isAdmin();
    }

    public function update(User $user, Book $book): Response|bool
    {
        return $user->isAdmin();
    }

    public function delete(User $user, Book $book): Response|bool
    {
        return $user->isAdmin();
    }

    public function restore(User $user, Book $book): Response|bool
    {
        return $user->isAdmin();
    }

    public function forceDelete(User $user, Book $book): Response|bool
    {
        return $user->isAdmin();
    }
}
