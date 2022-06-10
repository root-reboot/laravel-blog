@extends('layouts.app')
@section('title', 'Статьи')
@section('header', 'Статьи')
@section('content')
<table>
    @foreach ($articles as $article)
    <tr>
        <th colspan="3">{{ $article->name }}</th>
    </tr>
    <tr>
        <td colspan="3">{{ Str::limit($article->body, 200) }}</td>
    </tr>
    @endforeach
    <tr>
    <td><a href="{{ $articles->previousPageUrl() }}">Назад</a></td>
    <td><div align="center">Текущая страница: {{ $articles->currentPage() }}</div></td>
    
    <td><div align="right"><a href="{{ $articles->nextPageUrl() }}">Вперед</a></div></td>
    </tr>
</table>
@endsection