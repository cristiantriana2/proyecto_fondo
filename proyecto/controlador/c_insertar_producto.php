<?php

/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/

//Este controlador sirve para insertar producto a la base de datos.

    include ("../clases/conexion.php"); 
    $conexion = conexion::conectar();
    
if(!empty($_POST))
{
    $aler="";
    if(empty($_POST['id_producto']) OR empty($_POST['nombre_producto']) OR empty($_POST['id_tipo_producto']) OR empty($_POST['nit_empresa']) )
    {
        $aler='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else{
        
        //include( "clases/conexion.php" );

        $a = $_POST[ 'id_producto' ];
        $b = $_POST[ 'nombre_producto' ];
        $c = $_POST[ 'id_tipo_producto' ];
        $d = $_POST[ 'nit_empresa' ];

        
        $query = mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto = '$a' OR nombre_producto = '$b' ");
        $result = mysqli_fetch_array($query);

        if($result > 0){
            $aler='<p class="msg_error">El producto ya existe.</p>';
        }else{
            $query_insert = mysqli_query($conexion,"INSERT INTO productos( id_producto, nombre_producto, id_tipo_producto, nit_empresa)
                                                                VALUES( '$a', '$b' , '$c','$d')");

            if($query_insert){
                header(  "location: ../vista/v_tabla_producto.php" );
            }else{
                $aler='<p class="msg_error">Error al insertar producto.</p>';
            }
        }
    }
}