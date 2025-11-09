<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $articles = Article::with(['category', 'writer'])->latest()->orderBy('id', 'desc')->get();
        return view('pages.home', compact('articles'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $articles = Article::where('category_id', $id)->get();
        return view('pages.category', compact('category', 'articles'));
    }

    public function writers(){
        $writers = Writer::all();
        return view('pages.writer', compact('writers'));
    }

    public function writerArticle($id){
        $writer = Writer::find($id);
        $articles = $writer->articles;
        return view('pages.writerarcticle', compact('writer', 'articles'));
    }

    public function about(){
        return view('pages.aboutus');
    }
}
