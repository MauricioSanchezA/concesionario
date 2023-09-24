<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Inicializa variables con los datos del formulario
$id_inventario = $_POST['id_inventario'];
$gato = $_POST['gato'];
$cruceta = $_POST['cruceta'];
$botiquin = $_POST['botiquin']; 
$radio = $_POST['radio']; 
$observaciones = $_POST['observaciones']; 

// Verifica que los campos no estén vacíos
if (!empty($id_inventario) && !empty($gato) && !empty($cruceta) && !empty($botiquin) && !empty($radio) && !empty($observaciones)) {
    $sql = "INSERT INTO inventario (id_inventario, gato, cruceta, botiquin, radio, observaciones) VALUES ('$id_inventario', '$gato', '$cruceta', '$botiquin', '$radio', '$observaciones')";

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
