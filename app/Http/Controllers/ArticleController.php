<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('homepage', ['articles' => $articles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required|max:255',
            'text' => 'string|required',
            'image' => 'string|required'
        ]);

        // dd($validated);

        Article::create([
            'title' => $validated['title'],
            'text' => $validated['text'],
            'image' => $validated['image'],
        ]);

        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('posts.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'string|required|max:255',
            'text' => 'string|required',
            'image' => 'string|required'
        ]);

        $article->update($validated);

        return redirect()->route('homepage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('homepage'));
    }
}