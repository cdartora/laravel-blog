<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    private $article; // dependency injection with the model

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function index(): View
    {
        $articles = $this->article::all();

        return view('home', ['articles' => $articles]);
    }

    public function show(Article $article): View
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create(): View
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request): RedirectResponse
    {
        dd("criou um artigo");
        $validated = $request->validated();

        $this->article::create($validated);

        return redirect()->route('home');
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(ArticleRequest $request, Article $article): RedirectResponse
    {
        $validated = $request->validated();

        $this->article->update($validated);

        return redirect()->route('home');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()->route('home');
    }
}
