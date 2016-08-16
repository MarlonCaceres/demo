<?php
	
	include_once('conexion.php');

	function crearBD(){
		$con= new conexion();
		$cn= $con->conectar();

		$sql="CREATE DATABASE demo_catalogo";
		if(mysqli_query($cn,$sql))
		{
			echo "bd creada";
		}else{
			echo "error o BD ya esta creada";
		}

		mysqli_close($cn);
	}

	//crearBD();

?>