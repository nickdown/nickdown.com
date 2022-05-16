<x-main-layout>
    <x-slot name="title">
        {{ $book->title }}
    </x-slot>
    <article class="prose">
        <p>By: {{ $book->author }}</p>
        {!! Str::markdown($book->description) !!}
    </article>
</x-main-layout>

