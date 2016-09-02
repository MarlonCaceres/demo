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
	
	if($nombre ==null || $detalle==null || $tipo=null || $precio==null || $cantidad==null || $imagen_foto==null){
		header("Location:insertarProducto.php?id=1");
	}else{
		if(PrecioComa($precio)|| is_numeric($precio)){
			if (Cantidad($cantidad)){
				copy($imagen_ruta, $destino);
				$productosCon = new productosControlador();
				if($productosCon->insertarProducto($nombre,$detalle,$tipo,$precio,$cantidad,$destino)){
					echo "Registro Correcto";
					}else{
					echo "false";
				}
			}else{
				header("Location:insertarProducto.php?id=3");	
			}
		}else{
			header("Location:insertarProducto.php?id=2");
		}
	}

	function PrecioComa($precio){
		$coincidencia=strrpos($precio, ".");
		if($coincidencia){
			return true;
		}else{
			return false;
		}
	}
	function Cantidad($stock){
		if (is_numeric($stock)){
			return true;
		}else{
			return false;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Correcto</title>
	<meta charset="utf-8" http-equiv="Refresh" content="3; url=../Vista/insertarProducto.php">
</head>
<body>
</body>
</html>