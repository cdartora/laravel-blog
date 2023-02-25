@extends('layouts.app')

@section('title', $article['title'] . ' Diary')

@section('content')
    <div class="container mx-auto py-8">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md">
            <div class="bg-white px-4 py-2">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $article['title'] }}</h2>
            </div>
            <div class="p-4">
                <img class="h-64 w-full object-cover my-2 rounded-md" src="{{ $article->image }}" <div
                    class="flex items-center mt-4">
                <p class="text-gray-700 leading-relaxed mb-10">
                    {{ $article->text }}
                </p>
                <div class="flex">
                    <img src="https://avatars.githubusercontent.com/u/76970673?v=4" alt="Avatar"
                        class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <p class="font-semibold text-gray-800">Carlos Dartora</p>
                        <p class="text-sm text-gray-700">{{ 'Posted on ' . $article->created_at->format('d M, Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
