<x-main-layout>
    @foreach($posts as $post)
        <a href="{{ $post->url() }}">{{ $post->title}}</a>
        <br>
    @endforeach
</x-main-layout>
