<?php 
	require_once('../Datos/db_utilities.php');
	require_once "../Controlador/ventasControlador.php";
	require_once "../Controlador/productosControlador.php";
	
	$cantidad= $_POST['cantidad'];
	$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
	$Producto=ver_Id($id);

	if ($cantidad!=0 && $cantidad<=$Producto['Cantidad'])
	{
		$total=$cantidad*$Producto['Precio_producto'];
		$ventasCon = new ventasControlador();
		$productosCon=new productosControlador();
	
		if($ventasCon->insertarventa($id,$cantidad,$total))
		{
			compra($id,$cantidad);
			$mensaje= "Gracias Por Realizar su Compra. \nUsted a comprado ".$cantidad." ".$nombre=$Producto['nombre_producto']." con un costo de ".$Producto['Precio_producto']. ".\nSu total a pagar es: " .$total." ";

			$mensaje=wordwrap($mensaje,70,"\r\n");
			
			$asunto="Compra Realizada";
			$correo="davichochaos@gmail.com";
			$correo1="mricky3021@gmail.com";
			$headers="From:mricky3021@gmail.com"."\r\n";
			//mail($correo, $asunto, $mensaje,$headers);
			mail($correo1, $asunto, $mensaje,$headers);

			$mensaje1= "<br><p>Gracias Por Realizar su Compra. \nUsted a comprado ".$cantidad." ".$nombre=$Producto['nombre_producto']." con un costo de ".$Producto['Precio_producto']. ".\nSu total a pagar es: " .$total." ";

			echo "<p class='centrar alert alert-success'>Su compra ha sido satisfactoria</p><br>";
			echo "<p class='centrar'> Gracias Por Realizar su Compra."." <br>Usted a comprado ".$cantidad." ".$nombre=$Producto['nombre_producto']."con un costo de ".$Producto['Precio_producto']. ".<br>Su total a pagar es: ".$total."</p>"."<br>";
			echo "<p class='centrar alert alert-warning'>Su Resivo a sido enviado a su correo<br>Espere un momento sera redireccionado.</p><br>";
			echo '<br>';
			echo '<br>';
			echo '<br>';	
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
	<meta charset="utf-8" http-equiv="Refresh" content="12; url=../Vista/productos.php">
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

</body>
</html>