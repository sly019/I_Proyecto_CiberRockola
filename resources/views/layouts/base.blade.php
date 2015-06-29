<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title>Cyber Rockola</title>
	@section('sidebar')
	<form class="navbar-form pull-right">
      <div class="">
		<a href="{{ ('/Login') }}">login</a>
		<a href="{{ ('/') }}">Inicio</a>
		<a href="{{ ('/Songs') }}">Canciones</a>
	 </div>
	</form>
    @show
	
</head>
	<body>
	<div class="container">
            @yield('content')
	</div>				
</body>
</html>


	  
   	