<?php
    include("v_inicio.php");
    include("../controlador/c_insertar_tipo_empresa.php");

    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */

?>
<!------------------------------------------v_Inserta_tipo_empresa------------------------------------------------------------>


<link rel = "stylesheet" type = "text/css" href="../css/css_insertar.css">

<section id="container">

    <div class="form_insertar">
    <h1>Insertar un tipo empresa</h1>
    <hr>
    <!-- Activa la alerta si alguno de los campos no se rellena de forma adecuada -->
    <div class="alert"><?php echo isset($aler) ? $aler : ""; ?></div>
    <form action = ""  method="POST"> 

        <!-- Label para referirse a cada campo que debe ser rellenado -->
        <!-- Input para insertar la información deseada en cada campo de la tabla -->   
        <label>Codigo del tipo de empresa: </label>
        <input type = "text" name = "id_tipo_empresa">
        <label>Nombre del tipo de empresa: </label>
        <input type = "text" name = "tipo_empresa"> 

        

        <p><input type="submit" value="Insertar tipo empresa" class="btn_save"></p>

    </form>
    </div>
</section>

<!-------------------------------- Lista de tipos empresa ---------------------------------------->
<body>
<link rel = "stylesheet" type = "text/css" href="../css/css_tablas.css">
<section id="container">

<h1>Tipo empresa</h1>
<table><!-- empieza a dibujar una tabla -->
    <tr>
        <th>ID tipo empresa</th>
        <th>Tipo empresa</th>
        
        <th>Borrar</th>
    </tr>
    <?php



$query = mysqli_query($conexion, "SELECT id_tipo_empresa, tipo_empresa FROM tipo_empresa");/**Utiliza un select para traer dos campos de la tabla tipo_empresa */


//ejecuta la consulta
$result = mysqli_num_rows($query);

if($result > 0){
while($data = mysqli_fetch_array($query)){

    ?>
    <tr>
        <td><?php echo $data["id_tipo_empresa"]; ?></td>
        <td><?php echo $data["tipo_empresa"]; ?></td>
        <td>
            <a class="link_edit" href="../controlador/eliminar_confirmar_tipo_empresa.php?id=<?php echo $data["id_tipo_empresa"]; ?>">Borrar</a>
        </td>
    </tr>
    <?php 
}
}?>
</table><!-- Termina de dibujar la tabla -->


</section>
</body>