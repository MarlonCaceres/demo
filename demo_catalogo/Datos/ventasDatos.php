<?php

include_once("../Entidades/ventas.php");
include_once("conexion.php");

class ventasDatos 
{
	
	function insertarVenta($id_p,$cantidad,$total)
	{
		$con=new conexion();
		$cn= $con->conectar();

		$venta = new ventas();
		$venta->Fecha_compra=date("Y/m/d");
		$venta->Fk_producto=$id_p;
		$venta->Cantidad=$cantidad;
		$venta->Total=$total;

		mysqli_select_db($cn,"demo_catalogo");

		$sql ="INSERT INTO ventas (Fecha_compra,Fk_producto,Cantidad,Total) VALUES(
		'".$venta->Fecha_compra."',
		'".$venta->Fk_producto."',
		'".$venta->Cantidad."',
		'".$venta->Total."'
		)";

		if(mysqli_query($cn,$sql))
		{
			return true;
		}else{
			return false;
		}
		mysqli_close($cn);
	}

	
}

?>