<x-main-layout>
    <div class="pt-8 pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Book Reviews</h2>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-x-8 gap-y-12 lg:grid-cols-3 lg:max-w-none">
                @foreach($books as $book)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                {{--                                <a href="{{ route('posts.show', $post) }}" class="block mt-2">--}}
                                <p class="text-xl font-semibold text-gray-900">{{ $book->title }}</p>
                                {{--                                    <p class="mt-3 text-base text-gray-500 ">--}}
                                {{--                                        {{ $post->body }}--}}
                                {{--                                    </p>--}}
                                {{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-main-layout>
