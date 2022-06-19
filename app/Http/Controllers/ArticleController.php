<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $fillable = ['name', 'body'];

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
        $article = Article::findOrFail($id);
        
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $articles = new Article();
        return view('article.create', compact('articles'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000',
        ], [
            'name.required' => 'Поле Название статьи обязательно для заполнения',
            'name.unique' => 'Данное имя статьи уже существует, придумайте другое имя.',
            'body.required'  => 'Поле Текст статьи обязательно для заполнения',
            'body.min'  => 'Минимальня длинна статьи 1000 символов.'
          ]);
        $article = new Article();
        // $article->name = $data['name'];
        // $article->body = $data['body'];
        $article->fill($request->all());
        $article->save();
        return redirect()
            ->route('articles');
    }
}
