<?php
	require_once('../Datos/db_utilities.php');
	$name=$_POST['nombre'];
	echo $name;
	$productos = ver_Nombre($name);
	$producto = $productos-> fetch_assoc();

	echo "ID".$producto['Id'];
	while( $producto = $productos-> fetch_assoc())
				{
					echo '<h4>'.$producto['nombre_producto'].'</h4>';					
					echo '<img class="imagenes" src="'.$producto["Imagen"].'">';
				}
	/*if (empty($name=$_POST['nombre']))
	{
		header("Location:productos.php");
		echo 'debe llenar el campo para buscar';
	}else{
		if($productos=ver_Nombre($name))
			{
				echo "producto existe";
				while( $producto = $productos-> fetch_assoc())
				{
					echo '<h4>'.$producto['nombre_producto'].'</h4>';					
					echo '<img class="imagenes" src="'.$producto["Imagen"].'">';
				}
				echo "fin";
			}else{
				echo "producto no existe";
			}
	}*/
?>