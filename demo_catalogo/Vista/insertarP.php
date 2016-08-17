<?php 

require_once "../Controlador/productosControlador.php";
	$nombre=$_POST['nombre_producto'];
	$detalle=$_POST['detalle_producto'];
	$tipo=$_POST['Tipo_producto'];
	$precio=$_POST['precio_producto'];
	$cantidad=$_POST['cantidad_producto'];

	$imagen_foto=$_FILES['imagen_producto']['name'];
	$imagen_ruta=$_FILES['imagen_producto']['tmp_name'];
	$destino="../images/Productos/".$imagen_foto;
	copy($imagen_ruta, $destino);
	
	$productosCon = new productosControlador();

	if($productosCon->insertarProducto($nombre,$detalle,$tipo,$precio,$cantidad,$destino))
	{
		echo "Registro Correcto";
		}else{
		echo "false";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Correcto</title>
	<meta charset="utf-8" http-equiv="Refresh" content="2; url=../Vista/insertarProducto.php">
</head>
<body>
</body>
</html>