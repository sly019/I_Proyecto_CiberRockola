<html>
@extends('layouts.base')
	<head>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}
			.content {
				text-align: center;
				display: inline-block;
			}
			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}
			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<h1>Listado De Canciones</h1>
	<table align="center">
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
					<a href="/SongsCreate/{{{$Song->id}}}/articulos">PLAY</a>
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

		<div class="container">
			<div class="content">
				<div class="title">ROCKOLA'S</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
