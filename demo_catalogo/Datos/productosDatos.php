<?php

require_once("../Entidades/productos.php");
require_once("conexion.php");
require_once('../Datos/db_utilities.php');

class productosDatos 
{
	
	function insertarProducto($nombre,$Detalle,$Tipo_producto,$Precio_producto,$Cantidad,$Imagen)
	{
		$con=new conexion();
		$cn= $con->conectar();

		$productos = new productos();
		$productos->nombre_producto=$nombre;
		$productos->Detalle=$Detalle;
		$productos->Tipo_producto=$Tipo_producto;
		$productos->Precio_producto=$Precio_producto;
		$productos->Cantidad=$Cantidad;
		$productos->Imagen=$Imagen;

		mysqli_select_db($cn,"demo_catalogo");

		$sql= "INSERT INTO productos (nombre_producto,Detalle,Tipo_producto,Precio_producto,Cantidad,Imagen) VALUES(
		'".$productos->nombre_producto."',
		'".$productos->Detalle."',
		'".$productos->Tipo_producto."',
		'".$productos->Precio_producto."',
		'".$productos->Cantidad."',
		'".$productos->Imagen."'
		)";

		if(mysqli_query($cn,$sql))
		{
			return true;
		}else{
			return false;
		}
		mysqli_close($cn);
	}

	function VerProductos()
	{
		$con=new conexion();
		$cn= $con->conectar();

		mysqli_select_db($cn,"demo_catalogo");

		$sql= "SELECT * FROM productos WHERE Cantidad >= 1";

		$result=mysql_fetch_array($sql);
		echo "<table>";
		while ($producto = mysql_fetch_array($result))
		{
			echo "<tr>";
			foreach ($producto as $prod) {
				echo "<td>".$prod."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		mysql_free_result($result);

		mysqli_close($cn);
	}
}

?>