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
            .article {
                width: 650px;
                margin: auto;
                margin-top: 15px;
                margin-bottom: 50px;
            }
            a {
                color: #000000;
                text-decoration: none;
                
            }
            a:hover {
                color: #b34848;
                cursor: pointer;
            }
            .read {
                text-align: center;
                vertical-align: center;
                padding: 0;
            }
            .articles-link {
                margin-bottom: 25px;
            }
            .articles-link a:nth-child(2) {
                margin-left: 10px;
            }
            .articles-link form {
                margin-left: 410px;
                margin-top: -35px;
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
            <div class="articles-link">
                <h1>
                    @yield('header')
                <h1>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>