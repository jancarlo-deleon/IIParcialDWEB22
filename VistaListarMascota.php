<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Listar Mascota</title>
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
<div align="center">
        <div class="container-fluid" >

        <hr>
        <h3 align="center">LISTADO DE MASCOTAS</h3>
        <hr>
        <table border="1" class="table table-striped w-50 p-3"">
            <th style="text-align: center;">ID MASCOTA</th>
            <th style="text-align: center;">NOMBRE DE LA MASCOTA</th>
            <th colspan="2" style="text-align: center;">OPCIONES</th>
        <?php
            include_once "MascotaModel.php";
            $Mascota = new Mascota();
            $ListaMascotas = $Mascota->ListarMascotas();
            while($Mascotas = mysqli_fetch_assoc($ListaMascotas))
            {?>
            <tr>
                    <td style="text-align: center;">  <?php echo $Mascotas['idMascota'] ?> </td>
                    <td style="text-align: center;">  <?php echo $Mascotas['nombre'] ?> </td>
                    <td style="text-align: center;">
                    <a href="VistaAgregarVacuna.php?idEst=<?php echo $Mascotas['idMascota'];?>"><img alt="Agregar Vacuna" src="IconoVacuna.png">
                    </td>
                    <td style="text-align: center;">
                    <a href="VistaEditarMascota.php?idEst=<?php echo $Mascotas['idMascota'];?>"><img alt="Editar Mascota" src="IconoEditar.png">
                    </td>
            </tr>
            
        <?php } ?>

        </table>
        </div>
    </div>
    
</body>
</html>