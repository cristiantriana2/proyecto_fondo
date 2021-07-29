<?php
    include("v_inicio.php");
    include("../controlador/c_insertar_tipo_producto.php");

    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */
?>
<!------------------------------------------v_Inserta_tipo_producto------------------------------------------------------------>


<link rel = "stylesheet" type = "text/css" href="../css/css_insertar.css">

<section id="container">

    <div class="form_insertar">
    <h1>Insertar un tipo producto</h1>
    <hr>
    <!-- Activa la alerta si alguno de los campos no se rellena de forma adecuada -->
    <div class="alert"><?php echo isset($aler) ? $aler : ""; ?></div>
    <form action = ""  method="POST"> 

        
        <!-- Label para referirse a cada campo que debe ser rellenado -->
        <!-- Input para insertar la información deseada en cada campo de la tabla -->
        <label>Codigo del tipo de producto: </label>
        <input type = "text" name = "id_tipo_producto">
        <label>Nombre del tipo de producto: </label>
        <input type = "text" name = "Tipo_producto"> 

        

        <p><input type="submit" value="Insertar tipo producto" class="btn_save"></p>

    </form>
    </div>
</section>

<!----------------------------------Crea una lista de tipo producto-------------------------------------->
<body>
<link rel = "stylesheet" type = "text/css" href="../css/css_tablas.css">
<section id="container">

<h1>Tipo producto</h1>
<table>
    <tr>
        <th>ID tipo producto</th>
        <th>Tipo producto</th>
        
        <th>Borrar</th>
    </tr>
    <?php




$query = mysqli_query($conexion, "SELECT id_tipo_producto, Tipo_producto FROM tipo_producto");/**Utiliza un select para traer dos campos de la tabla tipo_product */

//ejecuta la consulta
$result = mysqli_num_rows($query);

if($result > 0){
    //Recorre los datos que arroja la consulta
    while($data = mysqli_fetch_array($query)){

    ?>
    <tr>
        <td><?php echo $data["id_tipo_producto"]; ?></td>
        <td><?php echo $data["Tipo_producto"]; ?></td>
        <td>
            <a class="link_edit" href="../controlador/eliminar_confirmar_tipo_producto.php?id=<?php echo $data["id_tipo_producto"]; ?>">Borrar</a>
        </td>
    </tr>
    <?php 
}
}?>
</table>


</section>
</body>