<?php
//Gaurdar los datos del servidor y la bd en variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autozone";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.


$productos=$_POST['productos'];
$fechacompra=$_POST['fechacompra'];
$total=$_POST['total'];

//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO ventas VALUES('0', '0', '$productos', '$fechacompra', '$total', '0')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='venta.php';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>