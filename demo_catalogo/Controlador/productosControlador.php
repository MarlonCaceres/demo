<?php

include_once "../Datos/productosDatos.php";

class productosControlador
{
	
	function insertarProducto($Detalle,$Tipo_producto,$Precio_producto,$Cantidad,$Imagen)
	{
		$obj= new productosDatos;
		return $obj->insertarProducto($Detalle,$Tipo_producto,$Precio_producto,$Cantidad,$Imagen);
	}
}
?>