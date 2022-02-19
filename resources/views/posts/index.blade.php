<x-main-layout>
    <x-slot name="title">Posts</x-slot>
    @foreach($posts as $post)
        <a href="{{ $post->url() }}">{{ $post->title}}</a>
        <br>
    @endforeach
</x-main-layout>
