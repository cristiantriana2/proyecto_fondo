<?php
    include("v_inicio.php");
    include("../controlador/c_insertar_empresa.php");
/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */
?>
<!------------------------------------------v_Inserta_empresa------------------------------------------------------------>


<link rel = "stylesheet" type = "text/css" href="../css/css_insertar.css">

<section id="container">

    <div class="form_insertar">
    <h1>Insertar una empresa</h1>
    <hr>
    <!-- Activa la alerta si alguno de los campos no se rellena de forma adecuada -->
    <div class="alert"><?php echo isset($aler) ? $aler : ""; ?></div>
    <form action = ""  method="POST"> 

        <!-- Label para referirse a cada campo que debe ser rellenado -->
        <!-- Input para insertar la información deseada en cada campo de la tabla -->
        <label>Codigo de la empresa: </label>
        <input type = "text" name = "nit_empresa" autocomplete="off">
        <label>Nombre de la empresa: </label>
        <input type = "text" name = "nombre_empresa" autocomplete="off"> 
        <label>Descripcion de la empresa: </label>
        <textarea name = "descripcion_empresa" class="int_des" autocomplete="off"></textarea>
        <label>Numero de contacto: </label>
        <input type = "text" name = "numero_contacto" autocomplete="off">
        <label>Direccion de la empresa: </label>
        <input type = "text" name = "direccion" autocomplete="off">
    
        <label>Tipo de empresa: </label><!-- empieza a dibujar una lista -->
        <select name = "id_tipo_empresa"> 

    <?php 
            $sql = "SELECT id_tipo_empresa, tipo_empresa FROM tipo_empresa";/**Utiliza un select para traer dos campos de la tabla tipo_empresa */

            //ejecuta la consulta
            $resultado = $conexion->query( $sql );

            //Recorre los datos que arroja la consulta
            while( $fila = mysqli_fetch_array( $resultado ) )
            {

                $tmp = $fila[ 'id_tipo_empresa' ] ." ". $fila[ 'tipo_empresa' ];

                //Imprime los items de la lista.
                echo "<option value='$tmp'> $tmp </option>";

            }

        ?>
    </select>  <!-- termina la lista -->
    <label>Estado de produccion: </label>
    <label>Si hay producción </label>
    <input type="radio" name="estado_produccion" value="1" required>
    <label>No hay producción</label>
    <input type="radio" name="estado_produccion" value="2" required>

    
    <p><input type="submit" value="Insertar Empresa" class="btn_save"></p>

    </form>
    </div>
</section>

<body>