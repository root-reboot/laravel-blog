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
            {{ Form::label('name', 'Название', ['class' => 'awesome']) }}<br>
            {{ Form::text('name') }} <br>
            {{ Form::label('body', 'Содержание') }} <br>
            {{ Form::textarea('body') }}<br>
            {{ Form::submit('Создать') }}
        {{ Form::close() }}

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </th>
    </tr>
</table>
@endsection