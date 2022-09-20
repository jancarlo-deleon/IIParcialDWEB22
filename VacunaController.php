<?php
include "VacunaModel.php";
$nuevaVacuna = new Vacuna();

/*GUARDAR*/
if(isset($_POST['btnAlmacenarVacuna']))
{
    $nuevaVacuna->AlmacenarVacuna($_POST['id'],$_POST['vacuna']);;
    header('Location: VistaListarMascota.php');
}