<?php
    include("v_inicio.php");
    include("../controlador/c_insertar_producto.php");
    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */

?>
<!------------------------------------------v_Inserta_producto------------------------------------------------------------>


<link rel = "stylesheet" type = "text/css" href="../css/css_insertar.css">

<section id="container">

    <div class="form_insertar">
    <h1>Insertar un producto</h1>
    <hr>
    <!-- Activa la alerta si alguno de los campos no se rellena de forma adecuada -->
    <div class="alert"><?php echo isset($aler) ? $aler : ""; ?></div>
    <form action = ""  method="POST"> 

        <label>Codigo del producto: </label>
        <input type = "text" name = "id_producto">
        <label>Nombre del producto: </label>
        <input type = "text" name = "nombre_producto"> 
        <label>Tipo de producto: </label>
        <select name = "id_tipo_producto"> <!-- empieza a dibujar una lista -->
        
        <?php 
    

        //Construye una consulta pero solo es texto
            $sql = "SELECT id_tipo_producto, Tipo_producto FROM tipo_producto";//------- dos campos
        //echo $sql;

        //ejecuta la consulta
        $resultado = $conexion->query( $sql );

        //Recorre los datos que arroja la consulta
        while( $fila = mysqli_fetch_array( $resultado ) )
        {

            $tmp = $fila[ 'id_tipo_producto' ] ." ". $fila[ 'Tipo_producto' ];//--------- muestra los dos campos de una misma tabla
            //Ojo con el value. Imprime los items de la lista.
            echo "<option value='$tmp'> $tmp </option>";

        }

        ?>
        </select> <!--Termina la lista-->
        codigo de la empresa: <select name = "nit_empresa"> <!-- empieza a dibujar una lista -->

        <?php 


        //Construye una consulta pero solo es texto
        $sql = "SELECT nit_empresa, nombre_empresa FROM empresas";
        //echo $sql;

        //ejecuta la consulta
        $resultado = $conexion->query( $sql );

        //Recorre los datos que arroja la consulta
        while( $fila = mysqli_fetch_array( $resultado ) )
        {

            $tmp = $fila[ 'nit_empresa' ] ." / ". $tmp = $fila[ 'nombre_empresa' ];
            //Ojo con el value. Imprime los items de la lista.
            echo "<option value='$tmp'> $tmp </option>";

        }

        ?>
        </select> <!-- termina la lista -->

    
    <p><input type="submit" value="Insertar Empresa" class="btn_save"></p>

    </form>
    </div>
</section>

<body>