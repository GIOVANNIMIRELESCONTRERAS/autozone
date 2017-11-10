 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="shortcut icon" type="image/gif" href="imagenes/l.png">
 <body background="imagenes/1.jpg"> 
 


	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Mostrar productos</title>
	</head>

		
	 <body>     
	<?php 
	include('conexion.php');
	      $sql="Select * from productos";
		 $consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		?>
		
	
<table border="8">
  <tr >
    <th>Id</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Marca</th>
    <th>Eliminar</th>
    <th>Imprimir</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $productos=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $productos['idproducto'];?></td>	
	<td><?php echo $productos['nombre'];?></td>	
    <td><?php echo $productos['precio'];?>  </td> 
      <td>  <?php echo $productos['marca'];?></td>
    
	
	
 <td><a href="eliminar_productos.php?idproducto=<?php echo $productos['idproducto']?>">Eliminar</a></td>
 
 <td><a href="reporte_productos.php?idproducto=<?php echo $productos['idproducto']?>">Imprimir</a></td>

 
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
		
</table>
<br>
 <br>
       <br>
<a href="lista_productos.php">Regresar</a>	
   </body>
</html>