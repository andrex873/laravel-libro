@extends('layout')


@section('content')
    <div class="page-header">
        <h1>All Games <small>Gotta catch 'em all!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('JuegoController@crear') }}" class="btn btn-primary">Crear juego</a>
        </div>
    </div>

    @if ($juegos->isEmpty())
        <p>No hay juegos actualmente! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Complete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($juegos as $game)
                <tr>
                    <td>{{ $game->titulo }}</td>
                    <td>{{ $game->publicador }}</td>
                    <td>{{ $game->completo ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ action('JuegoController@editar', $game->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('JuegoController@eliminar', $game->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif    
@stop