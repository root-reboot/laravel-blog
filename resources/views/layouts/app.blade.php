<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            body {
                font-family: 'Encode Sans', sans-serif;
            }
            table,h1 {
                width: 650px;
                margin: auto;
            }
            table th {
                font-weight: 400;
                font-size: 18px;
                padding: 5px;
                background: #edc2d1;
                border: 1px solid #dddddd;
            }
            h1 {
                border-bottom: 0;
                font-size: 26px;
            }
            tr {
                text-align: left;
                background: #f7f5f5;
            }
            td {
                text-align: left;
                padding: 15px;
                padding-top: 0;
            }
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>