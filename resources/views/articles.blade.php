@extends('layouts.app')
@section('title', 'Статьи')
@section('header', 'Статьи')
@section('content')
<table>
    @foreach ($articles as $article)
    <tr>
        <th>{{ $article->name }}</th>
    </tr>
    <tr>
        <td>{{ $article->body }}</td>
    </tr>
    @endforeach
</table>
@endsection