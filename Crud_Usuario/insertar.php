<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Inicializa variables con los datos del formulario
$id = $_POST['id']; // El ID ges autoincrementable
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$addres = $_POST['addres'];
$city = $_POST['city'];
$telephone = $_POST['telephone'];

// Crea una consulta SQL para insertar un nuevo usuario en la tabla "users"
$sql = "INSERT INTO users (id, name, lastname, addres, city, telephone) VALUES ('$id', '$name', '$lastname', '$addres', '$city', '$telephone')";


// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la inserción fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la inserción fue exitosa
    header("Location: index.php");
} else {
    
}
?>
