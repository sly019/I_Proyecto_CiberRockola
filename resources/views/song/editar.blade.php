@extends('layouts.base')

<h4>Editar Cancion</h4>
	{!!Form::open(array('url' => "/songs/$song->id", 'method' => 'PUT'))!!}
		<label>Selecciona la canción: </label>
		<input type="file" name="temp"><br><br>
		<input type="hidden" name="rutacancion" value= "{{{$song->rutacancion}}}">
		<label>Nombre De canción: </label>
		<input type="text" name="nombrecancion" value="{{{$song->nombrecancion}}}" ><br><br>
		<label>Artista: </label>
		<input type="text" name="artistacancion" value="{{{$song->artistacancion}}}"><br><br>		  	
		<input type="submit" value= "Actualizar">
	{!!Form::close()!!}
