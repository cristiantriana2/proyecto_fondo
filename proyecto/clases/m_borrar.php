<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/



 // funcion para borrar datos de una tabla 

    include( "../clases/conexion.php" );

    class m_borrar extends conexion
    {
        public static function borrar_empresas( $nit_empresa )
        {
            $salida = "";

            $conexion = self::conectar();
     
            //EEsto ejecuta el comando delete de sql para borrar datos de la tabla empresas
            $sql  = " DELETE FROM empresas  WHERE nit_empresa = '$nit_empresa' ";
            
            

            //echo $sql;
            $resultado = $conexion->query( $sql );

            if( mysqli_affected_rows( $conexion ) > 0 )
            {
                echo "Tus datos se borrado";
                header( "location: c_seccion.php" );

            }else{
                    echo "Tus datos no se borrado";
                    header( "location: c_seccion.php" );
                }
        }
    }
    