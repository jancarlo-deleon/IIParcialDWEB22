<?php
include "MascotaModel.php";
$nuevaMascota = new Mascota();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevaMascota->AlmacenarMascota($_POST['txtNombreMascota']);
    header('Location: VistaListarMascota.php');
}

/*EDITAR*/
else
if(isset($_POST['btnEditar']))
{
 $nuevaMascota->EditarMascota($_POST['id'],$_POST['nombre']); 
 header('Location: VistaListarMascota.php');
}