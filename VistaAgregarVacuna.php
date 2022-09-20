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
<div>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="">HOME</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="VistaAgregarMascota.php">Agregar Mascota</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="VistaListarMascota.php">Listar Mascota</a></li>
            </ul>

        </nav>
    </div>
<!---------------------------------------------------------------------------->

   <form action="VacunaController.php" method="POST" >
    <div class="container-fluid">
            <div class='mb-3'>
            <?php
                            include_once "MascotaModel.php";
                            $nuevaMascota = new Mascota();
                            /*FILTRAR A MASCOTA SEGUN ID ENVIADO*/
                            $resultado = $nuevaMascota->FiltrarMascota($_GET['idEst']);

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
                        <label for="id">Id Mascota:</label>
                        <input type="text" class = "form-control" name="id" value="<?php echo $resultadoFiltrado['idMascota']?>" readonly="readonly">
                    </p>
                    <p>
                        <label for="nombre">Nombre:</label>
                        <input type="text" class = "form-control" name="nombre" value="<?php echo $resultadoFiltrado['nombre']?>" readonly="readonly">
                    </p>
                    <p>
                        <label for="vacuna">Vacuna:</label>
                        <input type="text" class = "form-control" name="vacuna">
                    </p>    
                    <p>
                        <label for="anio">Año:</label>
                        <input type="text" class = "form-control" name="anio">
                    </p>        

                    <p align="center">
                        <input type="submit" class="btn btn-dark" value="AGREGAR VACUNA" name = "btnAlmacenarVacuna">
                    </p>
                            <?php
                                }
                            ?>

                </form>
            </div>
        </div>

   </form> 

    
</body>
</html>