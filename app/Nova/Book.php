<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;

class Book extends Resource
{
    public static string $model = \App\Models\Book::class;
    public static $title = 'title';
    public static $search = [
        'id',
        'title',
        'author',
        'description'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            DateTime::make('Published', 'published_at')->nullable()->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Author')->sortable(),
            new Panel('Content', [
                Markdown::make('Description')->alwaysShow(),
            ]),
        ];
    }
}
