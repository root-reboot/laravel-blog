@extends('layouts.app')
@section('title', 'Статьи')
@section('header')
            <a href="/articles">Статьи</a>
            <a href="/create">Создание статьи</a>
            {{Form::open(['url' => route('articles'), 'method' => 'GET'])}}
                {{Form::text('q', $q)}}
                {{Form::submit('Поиск')}}
            {{Form::close()}}
@endsection
@section('content')
<table>
    @foreach ($articles as $article)
    <tr>
        <th colspan="3"><a href="articles/{{ $article->id }}">{{ $article->name }}</a></th>
    </tr>
    <tr>
        <td colspan="3">{{ Str::limit($article->body, 1000) }}</td>
        
    </tr>
    <td class="read"><a href="articles/{{ $article->id }}/edit">Редактировать</a></td><td></td><td class="read"><a href="articles/{{ $article->id }}">Читать...</a></td>
    @endforeach
    <tr>
    <td><a href="{{ $articles->previousPageUrl() }}">Назад</a></td>
    <td><div align="center">Текущая страница: {{ $articles->currentPage() }}</div></td>
    
    <td><div align="right"><a href="{{ $articles->nextPageUrl() }}">Вперед</a></div></td>
    </tr>
</table>
@endsection