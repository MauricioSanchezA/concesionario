<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php"); 

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection(); 

// Crea una consulta SQL para seleccionar todos los usuarios de la tabla "users"
$sql = "SELECT * FROM users";

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
    <title>CREANDO EL CRUD DEL CONCESIONARIO</title> <!-- Se crea el título -->
    <link rel="stylesheet" href="usuario.css">
</head>

<body>
    <!-- Formulario para crear un nuevo usuario -->
    <div class="users-form">
        <h1>CREAR USUARIO</h1>
        <form action="insertar.php" method="POST">
            <input type="text" name="id" placeholder="Cédula">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="addres" placeholder="Dirección">
            <input type="text" name="city" placeholder="Ciudad">
            <input type="text" name="telephone" placeholder="Teléfono">
            <input type="submit" value="Agregar">
            <button class="" ><a href="../CARGARIMG/index.php">Cargar Imagen</a></button>
            <button class="" ><a href="../pag.html">Menú principal</a></button>
        </form>
        <!-- Botón "Menú principal" -->

    </div>
    
    <!-- Tabla que muestra usuarios registrados -->
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['addres'] ?></th>
                        <th><?= $row['city'] ?></th>
                        <th><?= $row['telephone'] ?></th>
                        <!-- Enlaces para consultar, editar y eliminar usuarios -->
                        <td><a href="actualizar.php?id=<?= $row['id'] ?>" class="users_table_edit"> Editar </a></td>
                        <td><a href="consulta.php?id=<?= $row['id'] ?>" class="users_table_consulta"> Consulta </a></td>

                        <th><a href="delete.php?id=<?= $row['id'] ?>" class="users_table_delete"> Eliminar </a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
