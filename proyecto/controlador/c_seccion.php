<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/

//Esta seccion nos sirve para imprimir la tabla y darle estilo a la vista.
 
    include( "../clases/consultas.php" ); 
    include( "../clases/Vimprimir.php" );
    
    include( "../clases/sesiones.php" );
    

    
    Sesiones::verificar_sesion();

    $r = consultas::consultar_empresas();
    $r = Vimprimir::imprimir( $r );
    
    $seccion = "../vista/v_seccion.php";
    include( "../vista/v_plantilla.php" );