<x-main-layout>
    <div class="pt-8 pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Some Books I've Loved</h2>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-x-8 gap-y-12 lg:grid-cols-3 lg:max-w-none">
                @foreach($books as $book)
                    <a href="{{ route('books.show', $book) }}" class="block rounded-lg shadow-lg bg-white p-6">
                        <p class="text-xl font-semibold text-gray-900">{{ $book->title }}</p>
                        <p class="text-gray-800">By: {{ $book->author }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-main-layout>
