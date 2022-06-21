@extends('layouts.app')
@section('title', 'Создание статьи')
@section('header')
            <a href="/articles">Все статьи</a>
@endsection
@section('content')
<table>
    <tr>
        <th>
        {{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PATCH']) }}
            @include('article.form')
            {{ Form::submit('Обновить', ['data-disable-with' => 'Сохраняем']) }}
        {{ Form::close() }}
        </th>
    </tr>
</table>
@endsection