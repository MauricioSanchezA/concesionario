<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Inicializa variables con los datos del formulario
$cedula_tecnico = $_POST['cedula_tecnico']; 
$codigo_tecnico = $_POST['codigo_tecnico'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion']; 
$telefono = $_POST['telefono']; 

// Verifica que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)
if (!empty($cedula_tecnico) && !empty($codigo_tecnico) && !empty($nombre) && !empty($direccion) && !empty($telefono)) {
    // Crea una consulta SQL para insertar un nuevo técnico en la tabla "tecnicos"
    $sql = "INSERT INTO tecnicos (cedula_tecnico, codigo_tecnico, nombre, direccion, telefono) VALUES ('$cedula_tecnico', '$codigo_tecnico', '$nombre', '$direccion', '$telefono')";

    // Ejecuta la consulta
    $query = mysqli_query($con, $sql);

    // Comprueba si la inserción fue exitosa
    if ($query) {
        // Redirecciona a la página "index.php" si la inserción fue exitosa
        header("Location: index.php");
        exit(); // Termina el script después de redireccionar
    } else {
        echo "Error al insertar el técnico en la base de datos: " . mysqli_error($con);
    }
} else {
    echo "Por favor, completa todos los campos del formulario.";
}
?>
