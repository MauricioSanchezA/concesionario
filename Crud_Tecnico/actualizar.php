<?php
    // Incluye el archivo de conexión
    include("conexion.php");

    // Establece la conexión a la base de datos
    $con = connection();

    // Obtiene el valor del parámetro 'id' de la URL
    $cedula_tecnico = $_GET['cedula_tecnico'];

    // Consulta SQL para seleccionar los datos del usuario con el ID proporcionado
    $sql = "SELECT * FROM tecnicos WHERE cedula_tecnico='$cedula_tecnico'";
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
    <title>Editar técnicos</title>
    <link rel="stylesheet" href="actualizar_usuario.css">
</head>
<body>
    
    <input type="button" class="menu-button" onclick="window.location.href='index.php';" value="Menu" />

    
    
    <div class="users-form">
        <form action="update.php" method ="POST">
            
            <input type="hidden" name="cedula_tecnico" value="<?= $row['cedula_tecnico']?>">

            
            <input type="hidden" name="cedula_tecnico" value="<?= $row['cedula_tecnico']?>">
            <input type="text" name="codigo_tecnico" placeholder="Código del técnico" value="<?= $row['codigo_tecnico']?>">
            <input type="text" name="nombre" placeholder="Nombre del técnico" value="<?= $row['nombre']?>">
            <input type="text" name="direccion" placeholder="Nombre del técnico" value="<?= $row['direccion']?>">
            <input type="text" name="telefono" placeholder="Teléfono del técnico" value="<?= $row['telefono']?>">

            
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
