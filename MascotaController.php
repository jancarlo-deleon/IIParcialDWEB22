<?php
include "MascotaModel.php";
$nuevaMascota = new Mascota();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevaMascota->AlmacenarMascota($_POST['txtNombreMascota']);
    header('Location: VistaListarMascota.php');
}