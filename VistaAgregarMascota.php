<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Agregar Mascota</title>
</head>
<body>

<!-- Barra de Navegacion> -->
    <nav>
        <ul>
            <li> <a href="index.php">HOME</a></li>
            <li> <a href="VistaAgregarMascota.php">Agregar Mascota</a></li>
            <li> <a href="VistaListarMascota.php">Listar Mascota</a></li>
        </ul>
    </nav>
<!---------------------------------------------------------------------------->

    <div class="container-fluid">
        <div class='mb-3'>
            <hr>
            <p>
                <h1 align="center">AGREGAR MASCOTAS</h1>
                <h5 align="center">A continuación, ingrese los datos correspondientes de la mascota:</h2>
            </p>
            <hr>
            <form action="MascotaController.php" method="post">
                <p>
                    <label for="txtNombreMascota" class="form-label">Nombre de la Mascota:</label > 
                    <input type="text" name="txtNombreMascota" class="form-control">
                </p>
                
                <p align="center">
                    <input type="submit" value="Almacenar Mascota" name="btnGuardar"  class="btn btn-dark" >
                </p>

            </form>
        </div>
    </div>

    
</body>
</html>