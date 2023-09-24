<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Inicializa variables con los datos del formulario
$numero_revision = $_POST['numero_revision'];
$fecha_revision = $_POST['fecha_revision'];
$descripcion_revision = $_POST['descripcion_revision'];
$tecnico = $_POST['tecnico']; 
$tiempo = $_POST['tiempo']; 
$valor_revision = $_POST['valor_revision']; 

// Verifica que los campos no estén vacíos-->
if (!empty($numero_revision) && !empty($fecha_revision) && !empty($descripcion_revision) && !empty($tecnico) && !empty($tiempo) && !empty($valor_revision)) {
    // Crea una consulta SQL para insertar una nueva revisión en la tabla "revisiones"
    $sql = "INSERT INTO revisiones (numero_revision, fecha_revision, descripcion_revision, tecnico, tiempo, valor_revision) VALUES ('$numero_revision', '$fecha_revision', '$descripcion_revision', '$tecnico', '$tiempo', '$valor_revision')";

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
