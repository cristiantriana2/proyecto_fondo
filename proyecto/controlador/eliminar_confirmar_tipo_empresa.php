<?php 
    
    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */

    //Este controlador nos sirve para eliminar el tipo de empresa de la tabla.

    include ("../clases/conexion.php"); 
    $conexion = conexion::conectar();
    
        
    if(empty($_REQUEST['id']))
    {
        header("location: ../vista/v_insertar_tipo_empresa.php");
    }else{

        $id_tipo_empresa = $_REQUEST['id'];

        $query = mysqli_query($conexion, "DELETE FROM tipo_empresa WHERE id_tipo_empresa = $id_tipo_empresa");

        //$result = mysqli_num_rows($query);

        if($result > 0){
            while($data = mysqli_fetch_array($query)){
                header( "location: ../vista/v_insertar_tipo_empresa.php" );
            }
        }else{
            header( "location: ../vista/v_insertar_tipo_empresa.php" );
        }

    }
?>



