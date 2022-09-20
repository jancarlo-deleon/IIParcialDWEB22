<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("brpyhn9wiibduaknwp2u-mysql.services.clever-cloud.com","ufsd6cusk50ffqvi","3CAtVh8ntYhql7gVOClW","brpyhn9wiibduaknwp2u");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }