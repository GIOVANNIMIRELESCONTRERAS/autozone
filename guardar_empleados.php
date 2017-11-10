
<?php

include "conexion.php";
// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.


$nombre=$_POST['nombre'];
$precio=$_POST['apellidos'];
$marca=$_POST['direccion'];
$ventas=$_POST['sexo'];

//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO empleados VALUES('0', '$nombre', '$apellidos', '$direccion', '$sexo')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='empleados.html';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>