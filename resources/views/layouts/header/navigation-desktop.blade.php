<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
        <a href="#" :class="{{ request()->is('home') }} ? 'bg-indigo-700' : 'hover:bg-indigo-500 hover:bg-opacity-75'"
           class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

        <a href="{{ route('posts.index') }}"
           :class="{{ request()->is('posts*') }} ? 'bg-indigo-700' : 'hover:bg-indigo-500 hover:bg-opacity-75'"
           class="text-white px-3 py-2 rounded-md text-sm font-medium">Posts</a>

        <a href="#"
           :class="{{ request()->is('projects') }} ? 'bg-indigo-700' : 'hover:bg-indigo-500 hover:bg-opacity-75'"
           class="text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

        <a href="#" :class="{{ request()->is('about') }} ? 'bg-indigo-700' : 'hover:bg-indigo-500 hover:bg-opacity-75'"
           class="text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
    </div>
</div>
