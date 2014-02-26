@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Game <small>Go on, mark it complete!</small></h1>
    </div>

    <form action="{{ action('JuegoController@handleEditar') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $juego->id }}">

        <div class="form-group">
            <label for="titulo">Title</label>
            <input type="text" class="form-control" name="titulo" value="{{ $juego->titulo }}" />
        </div>
        <div class="form-group">
            <label for="publicador">Publisher</label>
            <input type="text" class="form-control" name="publicador" value="{{ $juego->publicador }}" />
        </div>
        <div class="checkbox">
            <label for="completo">
                <input type="checkbox" name="completo" {{ $juego->completo ? 'checked' : '' }} /> Complete?
            </label>
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('JuegoController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop