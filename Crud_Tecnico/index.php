<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php"); 

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection(); 

// Crea una consulta SQL para seleccionar todos los tecnicos de la tabla "tecnicos"
$sql = "SELECT * FROM tecnicos";

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
    <link href="css/estilo1.css" rel="stylesheet"> <!-- Se conecta con los estios -->
    <link rel="stylesheet" href="">
    <title>CREANDO EL CRUD DEL TÉCNICO</title> <!-- Se crea el título -->
    <link rel="stylesheet" href="usuario.css">
</head>

<body>
    <!-- Formulario para crear un nuevo usuario -->
    <div class="users-form">
        <h1>CREAR TÉCNICO</h1>
        <form action="insertar.php" method="POST">
            <input type="text" name="cedula_tecnico" placeholder="Cédula del técnico">
            <input type="text" name="codigo_tecnico" placeholder="Código del técnico">
            <input type="text" name="nombre" placeholder="Nombre del técnico">
            <input type="text" name="direccion" placeholder="Direccion del técnico">
            <input type="text" name="telefono" placeholder="Teléfono del técnico">
            <input type="submit" value="Agregar">
            <button class="" ><a href="../CARGARIMG/index.php">Cargar Imagen</a></button>
            <button class="" ><a href="../pag.html">Menú principal</a></button>
        </form>
    </div>
    
    <!-- Tabla que muestra usuarios registrados -->
    <div class="users-table">
        <h2>Técnicos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Cédula del técnico</th>
                    <th>Código del técnico</th>
                    <th>Nombre del técnico</th>
                    <th>Dirección del técnico</th>
                    <th>Teléfono del técnico</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['cedula_tecnico'] ?></th>
                        <th><?= $row['codigo_tecnico'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <!-- Enlaces para consultar, editar y eliminar usuarios -->
                        <th><a href="consulta.php?cedula_tecnico=<?= $row['cedula_tecnico'] ?>" class="users_table_delete"> Consulta </a></th>
                        <th><a href="actualizar.php?cedula_tecnico=<?= $row['cedula_tecnico'] ?>" class="users_table_edit"> Editar </a></th>
                        <th><a href="delete.php?cedula_tecnico=<?= $row['cedula_tecnico'] ?>" class="users_table_delete"> Eliminar </a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
