<?php
include 'conexion.php';

// Consultar las inscripciones para cada curso
$sql_php = "SELECT inscripciones.id, inscripciones.nombre, inscripciones.email, inscripciones.telefono 
            FROM inscripciones 
            WHERE inscripciones.id_curso = 1"; // Curso PHP

$sql_mysql = "SELECT inscripciones.id, inscripciones.nombre, inscripciones.email, inscripciones.telefono 
              FROM inscripciones 
              WHERE inscripciones.id_curso = 2"; // Curso MySQL

$sql_html_css = "SELECT inscripciones.id, inscripciones.nombre, inscripciones.email, inscripciones.telefono 
                 FROM inscripciones 
                 WHERE inscripciones.id_curso = 3"; // Curso HTML y CSS

// Ejecutar las consultas
$result_php = $conn->query($sql_php);
$result_mysql = $conn->query($sql_mysql);
$result_html_css = $conn->query($sql_html_css);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Inscripciones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Inscripciones Registradas</h1>
    </header>
    <main>
        <!-- Mostrar las inscripciones del curso PHP -->
        <h2>Curso de PHP</h2>
        <?php if ($result_php->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result_php->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay inscripciones en este curso.</p>
        <?php endif; ?>

        <!-- Mostrar las inscripciones del curso MySQL -->
        <h2>Curso de MySQL</h2>
        <?php if ($result_mysql->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result_mysql->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay inscripciones en este curso.</p>
        <?php endif; ?>

        <!-- Mostrar las inscripciones del curso HTML y CSS -->
        <h2>Curso de HTML y CSS</h2>
        <?php if ($result_html_css->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result_html_css->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay inscripciones en este curso.</p>
        <?php endif; ?>

        <div class="botones">
                <button type="submit">Inscribirse</button>
                <button type="button" onclick="window.location.href='cursos.html'">Cursos</button>
        </div>
    </main>
</body>
</html>

<?php $conn->close(); ?>
