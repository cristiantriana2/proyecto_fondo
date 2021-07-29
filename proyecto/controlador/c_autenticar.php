<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/

//Este controlador nos sirve para validar la contraseña de nuestro login según la base de datos.

    include( "../clases/sesiones.php" );

    sesiones::iniciar_sesion();
    $_SESSION[ 'contrasena_administrador' ] = "";

    include( "../vista/v_autenticar.php" );