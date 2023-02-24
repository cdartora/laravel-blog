@extends('layouts.app')

@section('title', 'Homepage - Diary')

@section('content')
    <div class="container mx-auto py-8">
        <div class="bg-gray-100 py-2 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800">Home</h2>
                <h3 class="text-lg font-medium text-gray-500">All Articles</h3>
            </div>
            @auth
                <div>
                    <a href="{{ route('article.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                        Add a post
                    </a>
                </div>
            @endauth
        </div>
        <div class="grid grid-cols-3 gap-4 mt-4">
            @foreach ($articles as $article)
                <div class="bg-white rounded-lg m-2 shadow-lg w-100">
                    <img class="h-48 w-full object-cover" src="{{ $article->image }}"
                        alt="Cover image for {{ $article->title }}">
                    <div class="px-4 py-4 w-full">
                        <h2 class="font-bold text-xl mb-2 hover:underline hover:cursor-pointer underline-offset-1"
                            onclick="location.href='{{ route('article.show', $article->id) }}'">{{ $article->title }}</h2>
                        <div class="flex justify-between    ">
                            <p class="text-gray-700 text-base">Carlos Dartora</p>
                            @auth
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('article.edit', $article)">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('article.destroy', $article) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('article.destroy', $article)"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
