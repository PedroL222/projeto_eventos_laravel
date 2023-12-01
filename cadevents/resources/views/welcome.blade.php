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

    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/evento1.jpg" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">30/11/2023</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participantes">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @endsection
    </body>
    <script src="/js/script.js"></script>
</html>
