<?php
if (isset($_POST["submit"])) {
    $revisar = getimagesize($_FILES['image']['tmp_name']);
    if ($revisar !== false) {
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));

        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'users_crud_php';

        //Crear conexion con la base de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);

        // confirma la conexion
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        //Insertar Imagen en la base de datos
        $insertar = $db->query("INSERT into tabla_imagenes (imagenes, creado) VALUES ('$imgContenido', now())");

        //Condicional para verificar la subida del fichero
        if ($insertar) {
            echo "Archivo cargado correctamente";
        } else {
            echo "Fallo el cargue de datos, intente de nuevo";
        }
    } else {
        echo "Por favor seleccione imagen a subir";
    }
}
