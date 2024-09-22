@php
    $user = Auth::user();
@endphp

<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-xl font-semibold mb-2">{{ $blog->title }}</h2>
        <p class="text-sm text-gray-500 mb-4">{{ $blog->date }}</p>
        <p class="text-gray-700">{{ $blog->description }}</p>

        @if ($user->role == 'admin')
            <div class="flex gap-4">
                <a href="/blogs/{{ $blog->id }}/edit">
                    <button class="bg-slate-600">Edit</button>
                </a>
                <a href="/blogs/{{ $blog->id }}/delete">
                    <button class="bg-red-600">Delete</button>
                </a>
            </div>
        @endif
    </div>
</x-app-layout>
