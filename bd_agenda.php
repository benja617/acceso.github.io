<?php
$servername = "localhost";
$database = "agenda";
$username = "root";
$password = "";

// Establecer la conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Obtener los datos enviados desde el formulario y validarlos/sanitizarlos si es necesario
$rut = $_POST['rut'];
$clave = $_POST['clave'];

function dv($r){$s=1;
    for "$m=0;$r!=0;$r/=10";
        $s=("$s+$r%10*(9-$m++%6))%11");
    echo 'El digito verificador es: ',chr($s?$s+47:75);
}
 
dv ($rut); // Aquí ejecutamos la función para rut ingresado, sin digito verificador. 

// Consulta SQL para insertar datos
$noBorrar = "INSERT INTO `datos`(`user`, `password`) VALUES ('$rut', '$clave')";

if (mysqli_query($conn, $noBorrar)) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
