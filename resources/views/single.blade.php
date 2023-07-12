<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="text-gray-900">
                  <main class="pt-8 pb-16 bg-white">
                        <div class="flex items-center justify-center lg:p-8 mx-auto max-w-screen-xl ">
                            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                                <header class="mb-4 lg:mb-6 not-format">
                                    <address class="flex items-center mb-6 not-italic">
                                        <div class="inline-flex items-center justify-center mr-3 text-sm text-gray-900">
                                            <div>
                                                <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{ $post->user->name }}</a>
                                                <p class="text-base font-light text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="{{ $post->created_at->diffForHumans() }}">{{ $post->created_at->diffForHumans() }}</time></p>
                                            </div>
                                        </div>
                                    </address>
                                    <h1 class="text-xl font-semibold leading-tight text-gray-900 mb-6">{{ucfirst($post->title)}}</h1>
                                </header>
                                <p class="lead">{{$post->content}}</p>
                                </article>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
