<?php
    // Incluye el archivo de conexión
    include("conexion.php");

    // Establece la conexión a la base de datos
    $con = connection();

    // Obtiene el valor del parámetro 'id' de la URL
    $id = $_GET['id'];

    // Consulta SQL para seleccionar los datos del usuario con el ID proporcionado
    $sql = "SELECT * FROM users WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    // Obtiene una fila de resultados como un array asociativo
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Editar usuarios</title>
    <link rel="stylesheet" href="actualizar_usuario.css">
</head>
<body>
    
    <input type="button" onclick="window.location.href='index.php';" value="Menu" />
    
   
    <div class="users-form">
        <form action="update.php" method ="POST">
           
            <input type="hidden" name="id" value="<?= $row['id']?>">


            
            <input type="text" name="id" placeholder="Cédula" value="<?= $row['id']?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
            <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
            <input type="text" name="addres" placeholder="Dirección" value="<?= $row['addres']?>">
            <input type="text" name="city" placeholder="Ciudad" value="<?= $row['city']?>">
            <input type="text" name="telephone" placeholder="Teléfono" value="<?= $row['telephone']?>">
            
           
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
