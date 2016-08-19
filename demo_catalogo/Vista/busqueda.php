<?php
	require_once('../Datos/db_utilities.php');
	if (empty($name=$_POST['nombre']))
	{
		header("Location:productos.php");
		echo 'debe llenar el campo para buscar';
	}else{
		if ($Nombre=ver_Nombre($name))
		{
			echo "Producto existe";
			echo $Nombre;
		} else{
			echo "NOmbre Producto no existe";
			echo $Nombre;
		}
			if($Tipo= ver_Tipo($name)){
				echo "Tipo Producto existe";
			}else{
				echo "Tipo  Producto no existe";
				echo $Tipo;
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	<?php echo $name?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<header>SYSTELTRONIK</header>
	<div class="menu">
	<?php include_once "menu.php" ?>
	</div>
	
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>