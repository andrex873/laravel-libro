<?php

class JuegoController extends BaseController {	

	public function index()
	{
		$juegos = Juego::all();
		//$ju = DB::select(DB::raw("SELECT * FROM juegos"));
		return View::make('juego.index', compact('juegos'));
	}

	public function crear()
	{
		return View::make('juego.crear');	
	}

	public function handleCrear()
	{
		$game = new Juego();
	    $game->titulo = Input::get('titulo');
	    $game->publicador = Input::get('publicador');
	    $game->completo = Input::has('completo');
	    $game->save();

	    return Redirect::action('JuegoController@index');
	}

	public function editar(Juego $juego)
	{
		return View::make('juego.editar', compact('juego'));
	}

	public function handleEditar()
	{
		// Handle edit form submission.
        $game = Juego::findOrFail(Input::get('id'));
        $game->titulo = Input::get('titulo');
	    $game->publicador = Input::get('publicador');
	    $game->completo = Input::has('completo');
        $game->save();

        return Redirect::action('JuegoController@index');
	}

	public function eliminar(Juego $juego)
    {
        // Show delete confirmation page.
        return View::make('juego.eliminar', compact('juego'));
    }

    public function handleEliminar()
    {
        // Handle the delete confirmation.
        $game = Juego::findOrFail(Input::get('juego'));
        $game->delete();

        return Redirect::action('JuegoController@index');
    }

}