<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about', ['tags' => $tags]);
    }
}