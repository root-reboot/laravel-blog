<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles()
    {
        $articles = Article::paginate(2);

        return view('articles', ['articles' => $articles]);
    }
}
