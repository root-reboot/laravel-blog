@extends('layouts.app')
@section('title', 'Создание статьи')
@section('header')
            <a href="/articles">Все статьи</a>
@endsection
@section('content')
<table>
    <tr>
        <th>
        {{ Form::model($articles, ['route' => 'articles.store']) }}
            @include('article.form')
            {{ Form::submit('Сохранить') }}
        {{ Form::close() }}
        </th>
    </tr>
</table>
@endsection