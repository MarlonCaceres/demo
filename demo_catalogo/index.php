<?php
	
	include_once('conexion.php');

	$con= new conexion();
	if($con -> conectar())
	{
		
		echo "conectado";
	}else{
		echo "error de conexion";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Inicio
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		Catalogo
	</header>
		
	<div class="table-responsive">
		<table class="table">
			 <tr class="row">
			 	<td class="col-md-3">
			 		1
			 	</td>
			 	<td class="col-md-3">
			 		2
			 	</td>
			 	<td class="col-md-3">
			 		3
			 	</td>
			 	<td class="col-md-3">
			 		4
			 	</td>
			 </tr>
		</table>
	</div>

	<div>
		<?php echo $encabezado.' '.$detalle ?>
	</div>

</body>
</html>