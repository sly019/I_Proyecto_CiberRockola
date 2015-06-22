<html>
@extends('layouts.base')
	<head>
		<title>Ciber Rockola</title>
	</head>
	<body>
		<div class="container">
			<div class="content">

				<div class="title">ROCKOLAS</div>


				<input type="file" name="direccion" size="20"> 
				<input type="hidden" name="imagen"> 
				<input type="Submit" onClick="imagen.value = direccion.value" value="guardar imagen"> 

				<script type="text/javascript"></script>
				$direccion_file = $_POST['imagen']; 
				for ($a = 0; $a < strlen($direccion_file); $a ++) 
				{ 
				if ($direccion_file[$a] == "") { 
				$direccion_file[$a] = ''; 
				$a += 2; 
				} 
				} 
				echo $direccion_file;
				
			</div>
		</div>
	</body>
</html>
