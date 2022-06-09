<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function articles()
    {
        $article = new \App\Models\Article();
        return view('articles', ['articles' => $article->all()]);
    }

    public function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about', ['tags' => $tags]);
    }
}