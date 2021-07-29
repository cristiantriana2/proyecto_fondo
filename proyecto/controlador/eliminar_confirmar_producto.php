<?php 
    
    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */
    
    //Este controlador nos sirve para eliminar un producto de la tabla.

    include ("../clases/conexion.php"); 
    $conexion = conexion::conectar();
    
        
    if(empty($_REQUEST['id']))
    {
        header("location: ../vista/v_tabla_producto.php");
    }else{

        $id_producto = $_REQUEST['id'];

        $query = mysqli_query($conexion, "DELETE FROM productos WHERE id_producto = $id_producto");

        //$result = mysqli_num_rows($query);

        if($result > 0 ){
            while($data = mysqli_fetch_array($query)){
                header( "location: ../vista/v_tabla_producto.php" );
            }
        }else{
            header( "location: ../vista/v_tabla_producto.php" );
        }

    }
?>



