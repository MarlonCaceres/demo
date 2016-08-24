<?php 
	require_once('../Datos/db_utilities.php');
	require_once "../Controlador/ventasControlador.php";
	require_once "../Controlador/productosControlador.php";
	
	$cantidad= $_POST['cantidad'];
	$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
	
	if ($cantidad!=0)
	{
		$Producto=ver_Id($id);
		$total=$cantidad*$Producto['Precio_producto'];
		$ventasCon = new ventasControlador();
		$productosCon=new productosControlador();
	
		if($ventasCon->insertarventa($id,$cantidad,$total))
		{
			compra($id,$cantidad);
			echo "Registro Correcto";
			echo 'Gracias Por Realizar su Compra. <br>Usted a comprado '.$cantidad.' '.$nombre=$Producto['nombre_producto'].' con un costo de '.$Producto['Precio_producto']. '. <br> Su total a pagar es: ' .$total.' <br>Espere un momento sera redireccionado.';
		}else{
			echo "false";
		}	
	}
	else{
		header("Location:producto.php? id=$id");
	}
	
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertar Compra</title>
	<meta charset="utf-8" http-equiv="Refresh" content="10; url=../Vista/productos.php">
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

</body>
</html>