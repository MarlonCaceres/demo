<?php

include_once "../Datos/ventasDatos.php";

class ventasControlador
{
	
	function insertarVenta($id_p,$cantidad,$total)
	{
		$obj= new ventasDatos;
		return $obj->insertarVenta($id_p,$cantidad,$total);
	}
}
?>