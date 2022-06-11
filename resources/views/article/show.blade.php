@extends('layouts.app')
@section('title', $article->name)
@section('header')
            <a href="/articles">Статьи</a>
            <a class="back" href="/articles">Назад</a>
@endsection

@section('content')
    <h1>{{$article->name}}</h1>
    <div class="article">{{$article->body}}</div>
@endsection