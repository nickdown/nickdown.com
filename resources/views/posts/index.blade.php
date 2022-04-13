<x-main-layout>
    {{--        <a href="{{ $post->url() }}">{{ $post->title}}</a>--}}
    {{--        <br>--}}
    <div class="pt-8 pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">From the blog</h2>
                {{--                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">--}}
                {{--                    All my ideas.--}}
                {{--                </p>--}}
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-x-8 gap-y-12 lg:grid-cols-3 lg:max-w-none">
                @foreach($posts as $post)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        {{--                    <div class="flex-shrink-0">--}}
                        {{--                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">--}}
                        {{--                    </div>--}}
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                {{--                            <p class="text-sm font-medium text-indigo-600">--}}
                                {{--                                <a href="#" class="hover:underline"> Article </a>--}}
                                {{--                            </p>--}}
                                <a href="{{ route('posts.show', $post) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">{{ $post->title }}</p>
                                    <p class="mt-3 text-base text-gray-500 ">
                                        {{ $post->body }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                {{--                            <div class="flex-shrink-0">--}}
                                {{--                                <a href="#">--}}
                                {{--                                    <span class="sr-only">Roel Aufderehar</span>--}}
                                {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
                                {{--                                </a>--}}
                                {{--                            </div>--}}
                                <div class="ml-0"> {{-- add ml-3 back if adding a the profile photo someday--}}
                                    <p class="text-sm font-medium text-gray-900">
                                        {{--                                    <a href="#" class="hover:underline"> Nick Down </a>--}}
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time
                                            datetime="2020-03-16"> {{ $post->created_at->toFormattedDateString() }} </time>
                                        {{--                                    <span aria-hidden="true"> &middot; </span>--}}
                                        {{--                                    <span> 6 min read </span>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-main-layout>
