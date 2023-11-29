<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Cadastro de Eventos Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css">
        
    </head>
    <body>

    @extends('layouts.main')
    @section('title', 'Cadastro de Eventos')
    @section('content')

    @endsection
    </body>
    <script src="/js/script.js"></script>
</html>
