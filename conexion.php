<?php
$servername = "localhost";
$username = "root"; // O tu nombre de usuario de MySQL
$password = ""; // O tu contraseña de MySQL
$dbname = "gestion_cursos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
