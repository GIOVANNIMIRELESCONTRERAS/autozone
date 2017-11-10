<!DOCTYPE html>

 <html lang="es">
    <head><title>PRODUCTOS</title>
	    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	
	<body background="imagenes/14.jpg"> 
	
	</head>
	
	
		 <link rel="shortcut icon" type="image/gif" href="imagenes/l.png">
	 <body>
	  
	    <form id="producto" name="producto" method="post" action="guardar_producto.php">
		<fieldset>
	      <legend>AGREGAR PRODUCTO</legend>
		
		 Nombre:<br>
         <input type="text" name="nombre" placeholder="Nombre" required>
         <br>
		 Categoria:<br>
         <input type="text" name="categoria" placeholder="Categoria" required>
         <br>
		  Precio:<br>
         <input type="number" name="precio" placeholder="Precio" required>
         <br>
		   Marca:<br>
         <input type="text" name="marca" placeholder="Marca" required>
         <br>
         <br>
		 <button type="submit">Guardar</button>
		 
		 
		    </fieldset>
			
		</form>
	 <a href="index.html">Regresar</a>
	 </body>
<html>