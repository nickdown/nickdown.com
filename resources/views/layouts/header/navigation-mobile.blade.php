<div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
    <a href="{{ route('posts.index') }}"
       class="{{ request()->is('posts')
        ? 'bg-indigo-700 text-white block px-3 py-2 rounded-md text-base font-medium'
        : 'text-white hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 rounded-md text-base font-medium' }}"
    >Posts</a>

    <a href="{{ route('about.index') }}"
       class="{{ request()->is('about')
        ? 'bg-indigo-700 text-white block px-3 py-2 rounded-md text-base font-medium'
        : 'text-white hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 rounded-md text-base font-medium' }}"
    >About</a>
</div>
