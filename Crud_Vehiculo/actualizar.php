<?php
    // Incluye el archivo de conexión
    include("conexion.php");

    // Establece la conexión a la base de datos
    $con = connection();

    // Obtiene el valor del parámetro 'id' de la URL
    $id_carro = $_GET['id_carro'];

    // Consulta SQL para seleccionar los datos del usuario con el ID proporcionado
    $sql = "SELECT * FROM cars WHERE id_carro='$id_carro'";
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
    <link rel="stylesheet" href="editar_vehiculo.css">
</head>
<body>
    
    <input type="button" class="menu-button" onclick="window.location.href='index.php';" value="Menu" />

    
    
    <div class="users-form">
        <form action="update.php" method ="POST">
            
            <input type="hidden" name="id_carro" value="<?= $row['id_carro']?>">

            
            <input type="hidden" name="id_carro" value="<?= $row['id_carro']?>">
            <input type="text" name="marca" placeholder="Marca" value="<?= $row['marca']?>">
            <input type="text" name="modelo" placeholder="Modelo" value="<?= $row['modelo']?>">

            
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
