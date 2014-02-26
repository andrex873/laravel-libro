<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coleccion de juegos</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a href="{{ action('JuegoController@index') }}" class="navbar-brand"></a>
            </div>
        </nav>
        @yield('content')
    </div>    
</body>
</html>