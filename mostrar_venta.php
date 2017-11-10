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
	      $sql="Select * from ventas";
		 $consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		?>
		
	
<table border="8">
  <tr >
    <th>Id</th>
    <th>productos</th>
    <th>fechacompra</th>
	<th>total</th>
    <th>Eliminar</th>
    <th>Imprimir</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $productos=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $productos['idempleado'];?></td>	
	<td><?php echo $productos['productos'];?></td>	
    <td><?php echo $productos['fechacompra'];?>  </td> 
      <td>  <?php echo $productos['total'];?></td>
    
	
	
 <td><a href="eliminar_venta.php?idempleado=<?php echo $ventas['idempleado]?>">Eliminar</a></td>
 
 <td><a href="reporte_venta.php?idempleado">Imprimir</a></td>

 
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