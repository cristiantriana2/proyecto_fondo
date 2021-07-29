<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/


    //esta clase nos permite almacenar varias funciones de consulta para su posterior uso.

    include( "conexion.php" );

    class consultas extends conexion
    {
        static function consultar_empresas()
        {
            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql = "SELECT * FROM empresas";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            return $resultado;
        }



        static function consultar_informacion_empresa($nit)
        {
            $conexion = self::conectar();
     
            //Esta funcion nos permite buscar datos de una vista para realizar consultas.
            $sql = "SELECT * FROM vista_empresas WHERE nit_empresa = '$nit'";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            if ($conexion->affected_rows > 0 )
            {

                
                return mysqli_fetch_assoc($resultado);
            }
            else
            {
                false;
            }
        }

    }
    