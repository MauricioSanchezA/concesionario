<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php"); 

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection(); 

// Crea una consulta SQL para seleccionar todos los inventarios de la tabla "inventario"
$sql = "SELECT * FROM inventario";

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
    <title>CREANDO EL CRUD DEL INVENTARIO</title> <!-- Título de la página -->
    <link rel="stylesheet" href="usuario.css"> <!-- Enlace a una hoja de estilos "usuario.css" -->
</head>

<body>
    <!-- Formulario para crear un nuevo inventario -->
    <div class="users-form">
        <h1>CREAR INVENTARIO</h1>
        <form action="insertar.php" method="POST">
            <input type="text" name="id_inventario" placeholder="Id del inventario">
            <input type="text" name="gato" placeholder="Gato del inventario">
            <input type="text" name="cruceta" placeholder="Cruceta del inventario">
            <input type="text" name="botiquin" placeholder="Botiquín del inventario">
            <input type="text" name="radio" placeholder="Radio del inventario">
            <input type="text" name="observaciones" placeholder="Observaciones del inventario">
            <input type="submit" value="Agregar">
            <button class="" ><a href="../CARGARIMG/index.php">Cargar Imagen</a></button>
            <button class="" ><a href="../pag.html">Menú principal</a></button>
        </form>
    </div>
    
    <!-- Tabla que muestra inventarios registrados -->
    <div class="users-table">
        <h2>inventarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id del inventario</th>
                    <th>Gato del inventario</th>
                    <th>Cruceta del inventario</th>
                    <th>Botiquín del inventario</th>
                    <th>Radio del inventario</th>
                    <th>Observaciones del inventario</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id_inventario'] ?></td>
                        <td><?= $row['gato'] ?></td>
                        <td><?= $row['cruceta'] ?></td>
                        <td><?= $row['botiquin'] ?></td>
                        <td><?= $row['radio'] ?></td>
                        <td><?= $row['observaciones'] ?></td>
                        <!-- Enlaces para consultar, editar y eliminar inventarios -->
                        <td><a href="consulta.php?id_inventario=<?= $row['id_inventario'] ?>" class="users_table_delete"> Consulta </a></td>
                        <td><a href="actualizar.php?id_inventario=<?= $row['id_inventario'] ?>" class="users_table_edit"> Editar </a></td>
                        <td><a href="delete.php?id_inventario=<?= $row['id_inventario'] ?>" class="users_table_delete"> Eliminar </a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
