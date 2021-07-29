<?php 
    
    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */

    //Este controlador nos sirve para borrar el tipo producto de la tabla.

    include ("../clases/conexion.php"); 
    $conexion = conexion::conectar();
    
        
    if(empty($_REQUEST['id']))
    {
        header("location: ../vista/v_insertar_tipo_producto.php");
    }else{

        $id_tipo_producto = $_REQUEST['id'];

        $query = mysqli_query($conexion, "DELETE FROM tipo_producto WHERE id_tipo_producto = $id_tipo_producto");

        //$result = mysqli_num_rows($query);

        if($result > 0){
            while($data = mysqli_fetch_array($query)){
                header( "location: ../vista/v_insertar_tipo_producto.php" );
            }
        }else{
            header( "location: ../vista/v_insertar_tipo_producto.php" );
        }

    }
?>



