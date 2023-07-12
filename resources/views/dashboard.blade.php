<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="text-gray-900">
                    @if ($posts->isEmpty())
                        <p>You don't have any post.</p>
                    @else
                    @foreach($posts as $post)
                        <a href="{{ route('single', $post->id) }}"
                           class="flex items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-4">
                            <img
                                class="object-cover w-48 h-auto rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="https://placehold.co/400" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 pb-1 text-xl font-semibold tracking-tight text-gray-900">{{ ucfirst($post->title) }}</h5>
                                <div class="flex gap-2 items-center mb-4">
                                    <p class="text-sm text-green-600 font-semibold">{{ $post->user->name }}</p>
                                    <span class="text-sm text-gray-500 font-bold px-2">-</span>
                                    <p class="text-sm text-gray-500 font-bold ">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                                <p class="mb-3 font-normal text-gray-900">{{ Str::limit($post->content, 100) }}</p>
                            </div>
                        </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
