<?php

$idproducto=$_GET['idproducto'];

include "conexion.php";	
mysqli_query($conn,"delete from productos where idproducto='$idproducto'");

echo "<script type=\"text/javascript\">alert('registro borrado exitosamente');
		location.href='mostrar_productos.php';</script>";

	
	?>