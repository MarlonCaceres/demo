<?php

class ventas 
{
	public $Id;
	public $Fecha_compra;
	public $Fk_producto;
	public $Cantidad;
	public $Total;

	/*ID*/
	function get_id()
	{
		return $this->Id;
	}

	function set_id($Id)
	{
		$this->Id = $Id;
	}

	/*Fecha*/
	function get_Fecha_compra()
	{
		return $this->Fecha_compra;
	}

	function set_Fecha_compra($Fecha_compra)
	{
		$this->Fecha_compra = $Fecha_compra;
	}

	/*fk_producto*/
	function get_Fk_producto()
	{
		return $this->Fk_producto;
	}

	function set_Fk_producto($Fk_producto)
	{
		$this->Fk_producto = $Fk_producto;
	}

	/*cantidad*/
	function get_Cantidad()
	{
		return $this->Cantidad;
	}

	function set_Cantidad($Cantidad)
	{
		$this->Cantidad = $Cantidad;
	}

	/*total*/
	function get_Total()
	{
		return $this->Total;
	}

	function set_Total($Total)
	{
		$this->Total = $Total;
	}

}
?>