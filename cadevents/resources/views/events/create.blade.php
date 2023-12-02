@extends('layouts.main')
    @section('title', 'Cadastro de Eventos')
    @section('content')

    <div class="col-md-6 offset-md-3" id="event-create-container">
        <h1>Crie seu Evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
                <label for="title">Local:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome do evento">
                <label for="title">O evento é privado:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="O que haverá no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary col1-12" value="Criar Evento">
        </form>
    </div>

    @endsection