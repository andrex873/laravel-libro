@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create Juego <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('JuegoController@handleCrear') }}" method="post" role="form">
        <div class="form-group">
            <label for="titulo">Title</label>
            <input type="text" class="form-control" name="titulo" />
        </div>
        <div class="form-group">
            <label for="publicador">Publisher</label>
            <input type="text" class="form-control" name="publicador" />
        </div>
        <div class="checkbox">
            <label for="completo">
                <input type="checkbox" name="completo" /> Complete?
            </label>
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('JuegoController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop