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
		<table>
			<tr>
			<?php
				require_once ("../Datos/conexion.php");

				$con= new conexion();
				$cn=$con->conectar();

				$sql = "SELECT * FROM productos";
				
				if(mysqli_query($cn,$sql))
				{
					while($prod = mysql_fetch_array($sql)){
			?>
				<td class="col-md-3">
					<?php
						echo '<img src="'.$prod["Imagen"].'">';
					}
					?>
				</td>
				<?php
				}

				mysqli_close($cn);
				?>
	 		</tr>
 		</table>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>