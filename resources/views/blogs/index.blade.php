<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <div class="flex justify-between"><h1 class="text-3xl font-bold">Blogs</h1><a href="/blogs/create" class="bg-amber-200 border px-4 py-2">Add</a></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($blogs as $blog)
                <a href="/blogs/{{ $blog->id }}">
                    <div class="bg-white rounded-lg shadow-md p-5">
                        <h2 class="text-xl font-semibold mb-2">{{ $blog->title }}</h2>
                        <p class="text-sm text-gray-500 mb-4">{{ $blog->date }}</p>
                        <p class="text-gray-700">{{ $blog->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
