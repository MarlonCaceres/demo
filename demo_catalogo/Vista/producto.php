<?php
	include_once('../Datos/db_utilities.php');
	$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
	$Producto=ver_Id($id);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Producto</title>
</head>
<body>
<h2 >
<?php
	echo $Producto['Detalle'];
?>
</h2>
</body>
</html>