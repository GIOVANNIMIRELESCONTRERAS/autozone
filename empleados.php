<!DOCTYPE html>

 <html lang="es">
    <head><title>EMPLEADOS</title>
	    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	</head>
	 <link rel="shortcut icon" type="image/gif" href="imagenes/l.png">
	  <body background="imagenes/9.jpg">
	 <body>
	  
	    <form id="empleado" name="empleado" method="post" action="guardar_empleado.php">
		<fieldset>
	      <legend>AGREGAR EMPLEADO</legend>
		
		 Nombre:<br>
         <input type="text" name="nombre" placeholder="Nombre" required>
         <br>
		 Apellidos:<br>
         <input type="text" name="apellidos" placeholder="Categoria" required>
         <br>
		  Direccion:<br>
         <input type="text" name="direccion" placeholder="Precio" required>
         <br>
         Sexo:<br>		 
		 <input type="radio" name="sexo" value="1" checked>Masculino<br>
         <input type="radio" name="sexo" value="0" >Femenino<br>
         <br>
         <br>
		 <button type="submit">Guardar</button>
		 
		 
		    </fieldset>
			
		</form>
	 <a href="index.html">Regresar</a>
	 </body>
<html>