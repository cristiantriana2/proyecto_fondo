<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/


    //Esta clase es la que nos va a conectar a la base de datos de las empresas

    class conexion
    {
        static function conectar()
        {
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_empresas";
            
            return mysqli_connect($host,$user,$password,$db); 
        }
    }

    //$conexion = conexion::conectar();

