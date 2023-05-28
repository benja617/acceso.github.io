<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'agenda';

// Conexión a la base de datos
$connection = new mysqli($host, $user, $password, $database);

// Verificar la conexión

if ($connection->connect_errno) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit;
}
$rut = $_POST['rutu'];
$clave = $_POST['clavee'];

// Consulta para obtener datos
$sql = "SELECT * FROM `datos` WHERE `user`= '$rut' AND `password`='$clave' ";

// Ejecutar la consulta
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
   header('location:https://benja617.github.io/index.html');
   exit;
}
else{
    echo"Matate Qlo malo";
}


// Cerrar la conexión a la base de datos
mysqli_close($connection);
?>
