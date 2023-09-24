<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Verifica si el formulario de registro ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
    $con = connection();

    // Inicializa variables con los datos del formulario
    $correo = $_POST['correo'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Escapa los datos para evitar ataques de inyección de SQL
    $correo = mysqli_real_escape_string($con, $correo);
    $nombre_usuario = mysqli_real_escape_string($con, $nombre_usuario);
    $contrasena = mysqli_real_escape_string($con, $contrasena);

    // Crea una consulta SQL para insertar un nuevo usuario en la tabla "reg"
    $sql = "INSERT INTO reg (correo, nombre_usuario, contrasena) VALUES ('$correo', '$nombre_usuario', '$contrasena')";

    // Ejecuta la consulta
    $query = mysqli_query($con, $sql);

    // Comprueba si la inserción fue exitosa
    if ($query) {
        // Redirecciona a la página "index.php" si la inserción fue exitosa
        header("Location: log.html");
        exit(); // Termina el script después de redireccionar
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($con);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($con);
}
?>
