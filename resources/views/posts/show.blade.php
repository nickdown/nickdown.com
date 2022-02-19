<x-main-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    {!! $post->body !!}
</x-main-layout>
