<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id, Request $request)
    {
        $article = Article::find($id);
        $backUrl = url()->previous();
        $article->increment('views');
        return view('pages.article', compact('article', 'backUrl'));
    }

    public function popular()
    {
        $articles = Article::orderBy('views', 'desc')->paginate(3);
        return view('pages.popular', compact('articles'));
    }
}
