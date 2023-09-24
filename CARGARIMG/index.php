<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenar imagen en la base de datos MySQL usando PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body bgcolor="#bed7c0">
    <br>
    <div class="main">
        <h1>Cargar y almacenar imagen en MySQL PHP</h1>
        <div class="panel panel-primary">
            <div class="panel-body">

                <form action="cargar.php" name="MiForm" id="MiForm" method="post" enctype="multipart/form-data">
                    <h4 class="text-center">Seleccione Imagen a cargar</h4>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Archivos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="image" multiple>
                        </div>
                        <button name="submit" class="btn btn-primary">Cargar Imagen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button class="" ><a href="../CARGARIMG/ver.php">Ver Imágen</a></button>
    <button class="" ><a href="../pag.html">Menú principal</a></button>

</body>

</html>