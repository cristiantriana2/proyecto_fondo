<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/

//Este controlador sirve para capturar los datos del link mediante un GET para posteriormente llevarlos a la funcion para que se ejecute

    include( "../clases/editar_empresa.php" );
    editar_empresa::editar_empresas( $_GET[ 'nit_empresa'], $_GET[ 'nombre_empresa'], $_GET[ 'descripcion_empresa'], $_GET[ 'numero_contacto'], $_GET[ 'direccion'], $_GET[ 'id_tipo_empresa'], $_GET[ 'estado_produccion'] );