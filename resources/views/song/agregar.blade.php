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
	<h1>Nueva Canción</h1>
	{!!Form::open(array('url' => '/songs'))!!}
		  <label>Nombre De canción: </label>
		  <input type="text" name="nombrecancion"><br><br>
		  <label>Artista: </label>
		  <input type="text" name="artistacancion"><br><br>
		  <label>Selecciona la canción: </label><input type="hidden" name="valor" value="si">
		  <input type="file" name="rutacancion">
		  <input type="submit">
	{!!Form::close()!!}

		<div class="container">
			<div class="content">
				<div class="title">ROCKOLA'S</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
