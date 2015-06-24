<html>
@extends('layouts.base')
	<head>
	@section('sidebar')
	</head>
@section('content')
	<body>
		<div class="container">
			<h1><span class="label label-default">ROCKOLA'S</span></h1>				
			<div class="quote">{{ Inspiring::quote() }}</div>
		</div>
	</body>
@stop
</html>
