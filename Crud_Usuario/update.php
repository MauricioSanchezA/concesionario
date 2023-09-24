<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene los datos del formulario de edición
$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$addres = $_POST['addres'];
$city = $_POST['city'];
$telephone = $_POST['telephone'];

// Luego procedes con la actualización de los campos excepto el ID
$sql = "UPDATE users SET id='$id', name='$name', lastname='$lastname', addres='$addres', city='$city', telephone='$telephone' WHERE id='$id'";



// Ejecuta la consulta de actualización
$query = mysqli_query($con, $sql);

if ($query) {
    // Redirecciona a la página "index.php" si la actualización fue exitosa
    header("Location: index.php");
} else {
    // Muestra el mensaje de error de MySQL
    echo "Error de actualización: " . mysqli_error($con);
}

?>
