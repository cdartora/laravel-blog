@extends('layouts.app')

@section('title', 'Create post - Diary')

@section('content')
    @include('articles._form', [
        'action' => route('article.store'),
        'pageTitle' => 'Create a new post',
        'submitButtonText' => 'Create',
    ])
@endsection
