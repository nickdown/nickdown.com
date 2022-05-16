<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <a href="{{ route('about.index') }}"
           class=" {{ request()->is('about')
                    ? 'bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium'
                    : 'hover:bg-indigo-500 hover:bg-opacity-75 text-white px-3 py-2 rounded-md text-sm font-medium' }}"
        >About</a>

        <a href="{{ route('posts.index') }}"
           class=" {{ request()->is('posts')
                    ? 'bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium'
                    : 'hover:bg-indigo-500 hover:bg-opacity-75 text-white px-3 py-2 rounded-md text-sm font-medium' }}"
        >Posts</a>

        <a href="{{ route('books.index') }}"
           class=" {{ request()->is('books')
                    ? 'bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium'
                    : 'hover:bg-indigo-500 hover:bg-opacity-75 text-white px-3 py-2 rounded-md text-sm font-medium' }}"
        >Books</a>
    </div>
</div>
