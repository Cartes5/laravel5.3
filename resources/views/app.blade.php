<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <link rel="stylesheet" href="/css/app.css">
        <title>Perros</title>
    </head>
    <body>
        <div id="vue_js_data_app">
            <perro></perro>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>