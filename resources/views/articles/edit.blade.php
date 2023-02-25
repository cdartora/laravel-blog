@extends('layouts.app')

@section('title', 'Edit a post - Diary')

@section('content')
    @include('articles._form', [
        'action' => route('article.update', $article),
        'method' => 'patch',
        'pageTitle' => 'Edit a post',
        'submitButtonText' => 'Edit',
    ])
@endsection
