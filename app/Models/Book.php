<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $dates = [
        'published_at',
    ];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }
}
