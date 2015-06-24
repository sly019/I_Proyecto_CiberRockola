<html>
@extends('layouts.base')
	<head>	
@section('sidebar')
	</head>
	@section('content')
	<body>
	<h1>Nueva Canción</h1>
	{!!Form::open(array('url' => '/songs'))!!}
		  <label>Selecciona la canción: </label> <br><br>
		  <input type="file" name="rutacancion"> <br><br>
		  <label>Nombre De canción: </label>
		  <input type="text" name="nombrecancion"><br><br>
		  <label>Artista: </label>
		  <input type="text" name="artistacancion"><br><br>		  	
		  <input type="submit" value= "Crear">
	{!!Form::close()!!}
	</body>
	@stop
</html>