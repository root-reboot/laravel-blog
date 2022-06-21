<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

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
        $article = Article::findOrFail($id);
        
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $articles = new Article();
        return view('article.create', compact('articles'));
    }

    public function store(StorePostRequest $request)
    {
        $article = new Article();
        
        $request->validated();
        $article->fill($request->all());
        $article->save();
        
        return redirect()
            ->route('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
		  $this->validate($request, [
				'name' => 'required|unique:articles,name,' . $article->id,
				'body' => 'required|min:100',
            ]);
        
        $article->fill($request->all());
        $article->save();
        
        return redirect()
            ->route('articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
        $article->delete();
        }
        return redirect()->route('articles');
    }
}
