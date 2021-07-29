<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/


//Esta línea es para la conexión de datos.
    include ("../clases/conexion.php"); 
    $conexion = conexion::conectar();

if(!empty($_POST))
{
    $aler="";
    if(empty($_POST['nit_empresa']) OR empty($_POST['nombre_empresa']) OR empty($_POST['descripcion_empresa']) OR empty($_POST['numero_contacto']) OR empty($_POST['direccion']) OR empty($_POST['id_tipo_empresa']) OR empty($_POST['estado_produccion']))
    {
        $aler='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else{
           

        $a = $_POST[ 'nit_empresa' ];
        $b = $_POST[ 'nombre_empresa' ];
        $c = $_POST[ 'descripcion_empresa' ];
        $d = $_POST[ 'numero_contacto' ];
        $e = $_POST[ 'direccion' ];
        $f = $_POST[ 'id_tipo_empresa' ];
        $g = $_POST[ 'estado_produccion' ];

        
        
        $query = mysqli_query($conexion, "SELECT * FROM empresas WHERE nit_empresa = '$a' OR nombre_empresa = '$b' ");
        $result = mysqli_fetch_array($query);

        // if para evitar que la informacion insertada se repita.
        if($result > 0){
            $aler='<p class="msg_error">La Empresa ya existe.</p>';
        }else{
            //Esta línea es para armar un sql que se va a ejecutar.
            $query_insert = mysqli_query($conexion,"INSERT INTO empresas( nit_empresa, nombre_empresa, descripcion_empresa, numero_contacto, direccion, id_tipo_empresa, estado_produccion)
                                                                VALUES( '$a', '$b' , '$c','$d','$e','$f','$g')");

            // if para rediccionar si la información es insertada de manera correcta.
            if($query_insert){
                header(  "location: ../controlador/c_seccion.php" );           
            }else{
                $aler='<p class="msg_error">Error al insertar empresa.</p>';
            }
        }
    }
}