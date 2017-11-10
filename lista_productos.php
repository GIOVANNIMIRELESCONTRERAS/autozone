 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>PRODUCTOS</title>
	</head>
	<body background="imagenes/111.jpg"> 
		 <link rel="shortcut icon" type="image/gif" href="imagenes/l.png">
	 
	 
	 
	 <body>
	 
	  <body background="imagenes/2.jpg"> 
	 
	 
       <form method="get" name="form2" id="form2">
       
          <legend>INTRODUZCA EL NOMBRE DEL PRODUCTO A BUSCAR</legend>
     <br>
            <input name="nombres" type="text" id="nombres" size="" autocomplete="off" />
			<br>
            <button type="submit" name="consultar" id="consultar">CONSULTAR</button><br><br>
<br>
 <br>
       <br>
 <br>
       <br>
 <a href="lista_productos.php">NUEVA BUSQUEDA </a>

 <a href="mostrar_productos.php"> MOSTRAR TODOS </a>

          <br>
     <br>
      
    </form>
	<a href="index.html">Regresar</a>
	<br>
   <br>
       <br>
   <br>
       <br>
<?php 
	if(isset($_GET['consultar']))
	{
		if($_GET['nombres'] == ""){
		//echo "Debe Introducir el N&uacute;mero de Control para Realizar la B&uacute;squeda";
		?>
<script type="text/javascript">
			alert("Debe introducir  nombre  para realizar la búsqueda");	
		</script>
<?php
		} else
		{
		
		include('conexion.php');
	
       
		$nom = $_GET['nombres'];
		
		$sql="Select * from productos where nombre like '%$nom%' OR marca like '%$nom%' OR categoria like '%$nom%'";
		 
		$consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		if($nf!=0)		
		{?>
<table border="4">
  <tr >
    <th>Id</th>
    <th>Nombre</th>
    <th>Precio</th>
     <th>Marca</th>
      <th>Categoria</th>     

  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $productos=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $productos['idproducto'];?></td>	
	<td><?php echo $productos['nombre'];?></td>	
    <td><?php echo $productos['precio'];?>  
      <td>      <?php echo $productos['marca'];?></td>
    <td>      <?php echo $productos['categoria'];?></td>
    
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
</table>
<p>
  <?php }// if de nf	
		else{
			//echo "No Existe en la Base de Datos";?>
  <script type="text/javascript">
			alert("No existe en la base de datos");
  </script>
  
  <?php 
			}
      	 }// else
	}// si existe consultar 
	?>
  </tr>
  </table>
   </body>
<html>