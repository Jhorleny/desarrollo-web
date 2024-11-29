<?php
include 'conexion.php'; // Asegúrate de que este archivo esté correcto.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $id_curso = (int)$_POST['id_curso'];

    // Verificar que el curso existe
    $cursoQuery = "SELECT id FROM cursos WHERE id = $id_curso";
    $cursoResult = $conn->query($cursoQuery);

    if ($cursoResult->num_rows > 0) {
        // Insertar datos en inscripciones
        $sql = "INSERT INTO inscripciones (nombre, email, telefono, id_curso) 
                VALUES ('$nombre', '$email', '$telefono', $id_curso)";
        if ($conn->query($sql) === TRUE) {
            header("Location: confirmacion.html");
        } else {
            echo "Error al insertar los datos: " . $conn->error;
        }
    } else {
        echo "El curso seleccionado no existe.";
    }
}

$conn->close();
?>
