<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(Request $request)
    {

        $q = $request->input('q');

        if (empty($q)) {
            $articles = Article::paginate(2);
        } else {
            $articles = Article::where('name', 'like', "%{$q}%")->paginate(2);
        }
        return view('articles', compact('articles', 'q'));
    }

    public function show($id)
    {
        $articles = Article::findOrFail($id);
        
        return view('article.show', compact('articles'));
    }
}
