@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete <b>{{ $juego->titulo }}</b> <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('JuegoController@handleEliminar') }}" method="post" role="form">
        <input type="hidden" name="juego" value="{{ $juego->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('JuegoController@index') }}" class="btn btn-default">No eliminar</a>
    </form>
@stop