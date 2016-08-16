<?php
	include_once('../Datos/db_utilities.php');
	$productos = todos();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<header>SYSTELTRONIK</header>
	<div class="menu">
	<?php include_once "menu.php"
	?>
	</div>
	<div class="productos_todos">
		<div class="row">
		<?php
			while($producto = $productos -> fetch_assoc()){
		?>
			<div class="col-md-3 col-xs-6 centrar">
				<?php echo '<h4>'.$producto['Detalle'].'</h4>';
					
					echo '<img class="imagenes" src="'.$producto["Imagen"].'">';

				?>
				<br>
				<a href="producto.php? id=<?php echo $producto['Id'];?>">Ver Mas</a>
				
			</div>
		<?php
			}
		?>
		</div>
 	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>