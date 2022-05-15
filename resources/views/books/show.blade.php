<x-main-layout>
    <x-slot name="title">
        {{ $book->title }}
    </x-slot>
    <p>By: {{ $book->author }}</p>
    <p>{{ $book->description }}</p>
</x-main-layout>
