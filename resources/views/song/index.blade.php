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
	<table>
		<tr>
			<th>Id</th>
			<th>Autor</th>
			<th>Acciones</th>
		</tr>
		@forelse($song as $categoria)
			<tr>
				<td>{{{ $categoria->id }}}</td>
				<td>{{{ $categoria->nombrecancion }}}</td>
				<td> 
					<a href="/categories/{{{$categoria->id}}}/edit">Editar</a>
					<a href="/categories/{{{$categoria->id}}}/articulos">Borrar</a>
					{!!Form::open(array('url' => "/categories/$categoria->id", 'method' => 'DELETE'))!!}
						<button>PLAY</button>
					{!!Form::close()!!}
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3">No hay Canciones</td>
			</tr>
		@endforelse
	</table>

	<a href="/SongsCreate">Nueva Canción</a>


		<div class="container">
			<div class="content">
				<div class="title">ROCKOLA'S</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
