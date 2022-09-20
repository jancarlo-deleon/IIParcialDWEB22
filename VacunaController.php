<?php
include "VacunaModel.php";
$nuevaVacuna = new Vacuna();

/*GUARDAR*/
if(isset($_POST['btnAlmacenarVacuna']))
{
    $nuevaVacuna->AlmacenarVacuna($_POST['txtNombreMascota']);
    header('Location: VistaListarMascota.php');
}