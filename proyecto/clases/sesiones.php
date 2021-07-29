<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/

    //Esta clase nos sirve para validar el inicio de la sesion y el cierre de la misma.

    class sesiones
    {
        public static function iniciar_sesion()
        {
            if( !isset( $_SESSION ) ) session_start();
        } 

        public static function verificar_sesion()
        {
            self::iniciar_sesion();

            if( isset( $_SESSION[ 'contrasena_administrador' ] ) )
            {
                if( TRIM( $_SESSION[ 'contrasena_administrador' ] ) == "" )
                {
                    header( "location: ../controlador/c_autenticar.php" );
                }

            }else{
                    header( "location: ../controlador/c_autenticar.php" );
                }
        }
    }