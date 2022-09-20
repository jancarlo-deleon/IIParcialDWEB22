<?php
include_once "conexion.php";

class Mascota{

private $nombreMascota;

public function AlmacenarMascota($nom)
{
   /*CONEXION A LA BASE DE DATOS*/ 
   $nuevaConexion = new conexion();
   $ComandoConexion = $nuevaConexion->Conectar();
   $ComandoConexion->query("insert into Mascotas (nombre) values ("."'".$_POST['txtNombreMascota']."')" );

   if(!$ComandoConexion)
   {
    echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
   }
   /*echo "Registro agregado exitosamente";*/
   header("Location: VistaListarMascota.php");
}

public function ListarMascotas()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from Mascotas");
      if(!$resultado)
      {
        echo "Error al intentar realizar Consulta de Mascotas...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarMascota($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from Mascotas where idMascota=$id");
      return $resultado;
    }
    public function EditarMascota($id,$nom)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update Mascotas set nombre="."'".$nom."' where idMascota = $id");
      header("Location: VistaListarMascota.php");
    }



























}