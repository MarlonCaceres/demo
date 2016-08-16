<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<header>SYSTELTRONIK</header>
	<div class="menu">
	<?php include_once "menu.php"
	?>		
	</div>
	<div class="productos_todos">
		<?php
			if($sql = mysql_query("SELECT * FROM productos"))
			{
				while($prod = mysql_fetch_array($sql)){
					echo '<img src="'.$prod["Imagen"].'">';
				}
			}else{
				?>
					<img src="../images/Empresa/Pagina_mantenimiento.png">					

				<?php
			}
 		?>
	</div>

</body>
</html>