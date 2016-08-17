<?php 

require_once "../Datos/productosDatos.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertar Producto</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<?php 
include_once "menu_admin.php"
?>
	<div class="row">
		<div class="col-md-4 col-xs-2"></div>
		<div class="col-md-4 col-xs-10" id="formulario">
			<div class="row">
			<h1>Ingreso de Productos</h1>
			<br>
			<form action="insertarP.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2 col-xs-2">
							<label for="exampleInputEmail1">Nombre:</label>
						</div>
						<div class="col-md-3 col-xs-2">
							<input type="text" name="nombre_producto" placeholder="Zapato Dama">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2 col-xs-2">
							<label>Tipo:</label>
						</div>
						<div class="col-md-3 col-xs-2">
							<input type="text" name="Tipo_producto" placeholder="Calzado">
						</div>
					</div>				
				</div>
					
				<div class="form-group">
					<div class="row">
						<div class="col-md-2 col-xs-2">
							<label>Precio:</label>	
						</div>
						<div class="col-md-3 col-xs-2">
							<input type="text" name="precio_producto" placeholder="20.50">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2 col-xs-2">
							<label>Cantidad:</label>	
						</div>
						<div class="col-md-3 col-xs-2">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2 col-xs-2">
							<label>Imagen:</label>
						</div>
						<div class="col-md-3 col-xs-2">
							<input type="file" name="imagen_producto" >	
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2 col-xs-2">
							<label for="exampleInputEmail1">Detalle:</label>
						</div>
						<div class="col-md-3 col-xs-2">
							<textarea rows="5" cols="43" name="detalle_producto" placeholder="Zapato Dama talla 26"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<input type="submit" class="btn btn-default" value="Registar">
						</div>
					</div>				
				</div>
			</form>
			</div>
		</div>
		<div class="col-md-4 col-xs-2"></div>
	</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</html>