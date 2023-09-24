<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php"); 

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection(); 

// Crea una consulta SQL para seleccionar todos los usuarios de la tabla "revisiones"
$sql = "SELECT * FROM revisiones";

// Ejecuta la consulta y almacena el resultado en la variable "$query"
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ingresa datos a la base">
    <meta name="keywords" content="html, css, bases de datos, php, crud, concesionario">
    <meta name="author" content="Alejandro Sánchez Loaiza">
    <meta name="copyright" content="ADSO 2560119">
    <link href="css/estilo1.css" rel="stylesheet"> <!-- Se conecta con los estilos -->
    <link rel="stylesheet" href="">
    <title>CREANDO EL CRUD DE LA REVISIÓN</title> <!-- Se crea el título -->
    <link rel="stylesheet" href="usuario.css">
</head>

<body>
    <!-- Formulario para crear una nueva revisión -->
    <div class="users-form">
        <h1>CREAR REVISIÓN</h1>
        <form action="insertar.php" method="POST">
            <input type="text" name="numero_revision" placeholder="Número de revisión">
            <input type="text" name="fecha_revision" placeholder="Fecha de la revisión">
            <input type="text" name="descripcion_revision" placeholder="Descripción de la revisión">
            <input type="text" name="tecnico" placeholder="Técnico de la revisión">
            <input type="text" name="tiempo" placeholder="Tiempo de revisión">
            <input type="text" name="valor_revision" placeholder="Valor de la revisión">
            <input type="submit" value="Agregar">
            <button class="" ><a href="../CARGARIMG/index.php">Cargar Imagen</a></button>
            <button class="" ><a href="../pag.html">Menú principal</a></button>
        </form>
    </div>
    
    <!-- Tabla que muestra revisiones registradas -->
    <div class="users-table">
        <h2>Revisiones registradas</h2>
        <table>
            <thead>
                <tr>
                    <th>Número de revisión</th>
                    <th>Fecha de la revisión</th>
                    <th>Descripción de la revisión</th>
                    <th>Técnico de la revisión</th>
                    <th>Tiempo de revisión</th>
                    <th>Valor de la revisión</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['numero_revision'] ?></th>
                        <th><?= $row['fecha_revision'] ?></th>
                        <th><?= $row['descripcion_revision'] ?></th>
                        <th><?= $row['tecnico'] ?></th>
                        <th><?= $row['tiempo'] ?></th>
                        <th><?= $row['valor_revision'] ?></th>
                        <!-- Enlaces para consultar, editar y eliminar revisiones -->
                        <th><a href="consulta.php?numero_revision=<?= $row['numero_revision'] ?>" class="users_table_delete"> Consulta </a></th>
                        <th><a href="actualizar.php?numero_revision=<?= $row['numero_revision'] ?>" class="users_table_edit"> Editar </a></th>
                        <th><a href="delete.php?numero_revision=<?= $row['numero_revision'] ?>" class="users_table_delete"> Eliminar </a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
