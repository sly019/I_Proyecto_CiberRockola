<html>

 <head>
	
	<link href="css/bootstrap.css" rel="stylesheet">
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
			<a href="/songs/create">Nueva Canción</a>	
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
					<div id="divForm"> <div class="first-div">{!!Form::open(array('url' => "/songs/$Song->id/edit", 'method' => 'get')) !!}
						<button class="btnnn btn:hover">Editar</button>
					{!!Form::close()!!}</div>
					<div class="second-div">{!!Form::open(array('url' => "/songs/$Song->id", 'method' => 'DELETE'))!!}
						<button class="btnnn btn:hover">Borrar</button>
					{!!Form::close()!!}</div>
					<div class="third-div" >{!!Form::open(array('url' => "/songs/$Song->id/enqueue", 'method' => 'POST'))!!}
						<button class="btnn btn:hover">Play</button>
					{!!Form::close()!!}</div>
					</div>
					
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3">No hay Canciones</td>
			</tr>
		@endforelse
	</table>
		</div>
	</body>

</html>

