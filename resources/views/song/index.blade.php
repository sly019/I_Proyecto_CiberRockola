<html>
@extends('layouts.base')

@section('sidebar')

@section('content')
 <head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		  {!! Form::open(['route' => 'songs.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
		  <div class="form-group">
		  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Artista' ]) !!}
		  {!! Form::text('artist', null, ['class' => 'form-control', 'placeholder' => 'Canción' ]) !!}
		  </div>
		  <button type="submit" class="btn btn-default">Buscar</button>
		  {!! Form::close() !!}
	</head>
	<body>
		<div class="container">
			<h1>Listado De Canciones</h1>
			<table class="table table-bordered" >
		<tr>
			<th>Autor</th>
			<th>Canción</th>
			<th>Acciones</th>
		</tr>
		@forelse($song as $Song)
			<tr>
				<td>{{{ $Song->artistacancion }}}</td>
				<td>{{{ $Song->nombrecancion }}}</td>
				<td> 
					<a href="/songs/{{{$Song->id}}}/edit">Editar</a>
					<a href="/songs/tocar">PLAY</a>
					{!!Form::open(array('url' => "/songs/$Song->id", 'method' => 'DELETE'))!!}
						<button>Borrar</button>
					{!!Form::close()!!}
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3">No hay Canciones</td>
			</tr>
		@endforelse
	</table>
	<a href="/songs/create">Nueva Canción</a>	 
		</div>
	</body>
	@stop
</html>

