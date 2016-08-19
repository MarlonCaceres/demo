<?php
	require_once('../Datos/db_utilities.php');
	$id = isset( $_GET['id'] ) ? $_GET['id'] : '');
	$Producto=ver_Id($id);
	$nombre=$Producto['nombre_producto'];	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	<?php echo $nombre?>
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
	<div>
		<div class="row">
			<div class="col-md-2 col-xs-1"></div>
			<div class="col-md-8 col-xs-10">
				<h2> <?php echo '<h1>'.$Producto['nombre_producto'].'</h1>';?> </h2>
				<hr>
			</div>
			<div class="col-md-2 col-xs-1"></div>
		</div>
	</div>
	<div class="contenido">
		<div class="row">
			<div class="col-md-2 col-xs-1">	
			</div>
			<div class="col-md-8 col-xs-10">
				<div class="row">
					<div class="col-md-1 col-xs-2"></div>
					<div class="col-md-5 col-xs-8">
						<div class="imagen">
						<?php
							echo '<img class="imagen" src="'.$Producto["Imagen"].'">';
							?>
						</div>
					</div>
					<div class="col-md-5 col-xs-12">
						<div class="row">
							<div><b><p class="precio col-md-12 col-xs-12"><?php echo 'US $'.$Producto['Precio_producto'];?></p></b>
							</div>
							<div><p class="detalle col-md-12 col-xs-12"><?php echo '<b>Disponibles: </b> '.$Producto['Cantidad'];?></p>
							</div>
							<div class="detalle col-md-12 col-xs-12 ">
								<form action="compraP.php? id=<?php echo $id?> " method="POST" class="formulario">
									<div class="form-group">
										<div class="row">
											<!--div class="col-md-7 col-xs-6"-->
											<div class="col-md-4 col-xs-2">
												<!--button type="button" class="btn btn-default" aria-label="Left Align">
												  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
												</button-->
												<input type="text" name="cantidad" placeholder="1" maxlength="3" size="1"/>
												<!--button type="button" class="btn btn-default" aria-label="Left Align">
												  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
												</button-->
											</div>
											<div class="col-md-4 col-xs-6">
												<input class="btn btn-info" type="submit" value="Comprar"/>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-1 col-xs-1"></div>
				</div>	
				<hr>
			</div>
			<div class="col-md-2 col-xs-1">	
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<b><p class="detalle col-md-12 col-xs-12">Detalle</p></b>
				<p class="detalle col-md-12 col-xs-12"><?php echo $Producto['Detalle'];?></p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>