<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Inicializa variables con los datos del formulario
$id_carro = $_POST['id_carro'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];

// Crea una consulta SQL para insertar un nuevo usuario en la tabla "users"
$sql = "INSERT INTO cars (id_carro, marca, modelo) VALUES ('$id_carro', '$marca', '$modelo')";


// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la inserción fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la inserción fue exitosa
    header("Location: index.php");
} else {
    
}
?>
