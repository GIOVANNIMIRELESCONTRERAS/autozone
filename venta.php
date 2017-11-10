<!DOCTYPE html>

 <html lang="es">
    <head><title>VENTAS</title>
	    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	</head>
		 <link rel="shortcut icon" type="image/gif" href="imagenes/l.png">
	 <body>
<body background="imagenes/7.jpg"> 
	  
	    <form id="empleado" name="idempleado method="post" action="guardar_venta.php">
		<fieldset>

	      <legend>"VENTAS"</legend>
                        
	Selecciona el nombre del Empleado:<br>
	
<select name="empleado">
   
     <?php
           include "conexion.php";
		   $consulta="select * from empleados";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['idempleado']?>">  <?php echo $lista['nombre']?> <?php echo $lista['apellidos']?> <?php echo $lista['direccion']?> <?php echo $lista['sexo']?></option> 
    <?php } ?>
</select> 
		 <br>
		 
		 Productos:<br>
		 <input type="text" name="productos" required>
		 <br>

		 
		 
		 Fecha de Compra:<br>
		 <input type="date" name="fechacompra" required>
		 <br>
         Total:<br>
		 <input type="text" name="total" required>
		 <br>
		 
Selecciona el Producto:<br>
		  
<select name="idproducto">
   
     <?php
           include "conexion.php";
		   $consulta="select * from productos";
                 $resultado=mysqli_query($conn,$consulta);
                       
                        while($lista=mysqli_fetch_array($resultado)){
 
	    ?> 
                   <option value="<?php echo $lista['idproducto']?>">  <?php echo $lista['nombre']?> <?php echo $lista['categoria']?> <?php echo $lista['precio']?> <?php echo $lista['marca']?> </option> 
    <?php } ?>
	<br><br>
</select> 

		 <button type="submit">Guardar</button>
		 <br><br>
				 <a href="mostrar_venta.php">    REPORTE    </a>
		 </fieldset>
		</form>
	 	 <a href="index.html">Regresar</a>
	 </body>
<html>