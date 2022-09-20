<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Agregar Vacuna</title>
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

   <form action="VacunaController.php" method="POST" >
    <div class="container-fluid">
            <div class='mb-3'>
            <?php
                            include_once "MascotaModel.php";
                            $nuevaMascota = new Mascota();
                            /*FILTRAR A MASCOTA SEGUN ID ENVIADO*/
                            $resultado = $nuevaMascota->FiltrarMascota($_GET['idMasc']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
            ?>
                <hr>
                <p>
                    <h1 align="center">AGREGAR VACUNA</h1>
                    <h5 align="center">A continuación, ingrese los datos correspondientes:</h2>
                </p>
                <hr>
                <form action="VacunaController.php" method="post">
                    <p>
                        <label for="txtNombreVacuna" class="form-label">Nombre de la Vacuna:</label > 
                        <input type="text" name="txtNombreVacuna" class="form-control">
                    </p>
                    <p>
                        <label for="txtAnio" class="form-label">Año:</label > 
                        <input type="text" name="txtAnio" class="form-control">
                    </p>
                    
                    <p align="center">
                        <input type="submit" value="Almacenar Mascota" name="btnAlmacenarVacuna"  class="btn btn-dark" >
                    </p>

                </form>
            </div>
        </div>

   </form> 

    
</body>
</html>