<?php

require_once "../Datos/productosDatos.php";

class productosControlador
{
	
	function insertarProducto($nombre,$Detalle,$Tipo_producto,$Precio_producto,$Cantidad,$Imagen)
	{
		$obj= new productosDatos;
		return $obj->insertarProducto($nombre,$Detalle,$Tipo_producto,$Precio_producto,$Cantidad,$Imagen);
	}

}
?>