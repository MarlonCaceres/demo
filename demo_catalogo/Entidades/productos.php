<?php

class productos 
{
	public $Id;
	public $nombre_producto;
	public $Detalle;
	public $Tipo_producto;
	public $Precio_producto;
	public $Cantidad;
	public $Imagen;

	/*ID*/
	function get_id()
	{
		return $this->Id;
	}

	function set_id($Id)
	{
		$this->Id = $Id;
	}

	/*ID*/
	function get_nombre_producto()
	{
		return $this->nombre_producto;
	}

	function set_nombre_producto($nombre_producto)
	{
		$this->nombre_producto = $nombre_producto;
	}

	/*DETALLE*/
	function get_Detalle()
	{
		return $this->Detalle;
	}

	function set_Detalle($Detalle)
	{
		$this->Detalle = $Detalle;
	}

	/*Tipo_producto*/
	function get_Tipo_producto()
	{
		return $this->Tipo_producto;
	}

	function set_Tipo_producto($Tipo_producto)
	{
		$this->Tipo_producto = $Tipo_producto;
	}
	/*Precio_producto*/
	function get_Precio_producto()
	{
		return $this->Precio_producto;
	}

	function set_Precio_producto($Precio_producto)
	{
		$this->Precio_producto = $Precio_producto;
	}
	/*Cantidad*/
	function get_Cantidad()
	{
		return $this->Cantidad;
	}

	function set_Cantidad($Cantidad)
	{
		$this->Cantidad = $Cantidad;
	}
	
	/*Imagen*/
	function get_Imagen()
	{
		return $this->Imagen;
	}

	function set_Imagen($Imagen)
	{
		$this->Imagen = $Imagen;
	}

}
?>