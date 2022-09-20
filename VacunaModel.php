<?php
include_once "conexion.php";

class Vacuna{

    private $nombreVacuna;
    private $anioVacuna;

    public function AlmacenarVacuna($nom)
{
   /*CONEXION A LA BASE DE DATOS*/ 
   $nuevaConexion = new conexion();
   $ComandoConexion = $nuevaConexion->Conectar();
   $ComandoConexion->query("insert into Vacunas (nombreVacuna,anio) values ("."'".$_POST['txtNombreVacuna'].','".$_POST['txtAnio']."',"'")" );

   if(!$ComandoConexion)
   {
    echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
   }
   /*echo "Registro agregado exitosamente";*/
   header("Location: VistaListarMascota.php");
}


















}