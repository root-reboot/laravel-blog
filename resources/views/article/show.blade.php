@extends('layouts.app')
@section('title', $article->name)
@section('header')
    <div class="articles-link">
        <h1>
            <a href="/articles">Статьи</a>
            <a href="/articles">Назад</a>
        </h1>
    </div>
@endsection

@section('content')
    <h1>{{$article->name}}</h1>
    <div class="article">{{$article->body}}</div>
@endsection