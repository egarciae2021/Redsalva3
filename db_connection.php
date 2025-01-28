<?php
// // Configuración de la conexión
// $servername = "localhost"; // Cambia esto si tu servidor no es local
// $username = "root"; // Cambia esto por el usuario de tu base de datos
// $password = ""; // Cambia esto por la contraseña de tu base de datos
// $database = "redsalva"; // Cambia esto por el nombre de tu base de datos
$servername = "db-mysql-nyc3-92708-do-user-18902954-0.k.db.ondigitalocean.com"; // Cambia esto si tu servidor no es local
$username = "doadmin"; // Cambia esto por el usuario de tu base de datos
$password = "AVNS_A-9K9pbCqiCxPb0273r"; // Cambia esto por la contraseña de tu base de datos
$database = "defaultdb"; // Cambia esto por el nombre de tu base de datos
$port = 25060;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Configuración adicional (opcional)
$conn->set_charset("utf8"); // Establecer codificación de caracteres UTF-8

// Mensaje opcional para pruebas (quitar en producción)
// echo "Conexión exitosa a la base de datos.";
?>
