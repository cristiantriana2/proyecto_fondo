<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel = "stylesheet" type = "text/css" href="../css/css_tablas.css">
    <?php  include("v_inicio.php"); ?>
</head>
<body>
    <section id="container">

        <h1>Productos</h1>
        <table>
            <tr>
                <th>ID producto</th>
                <th>Nombre del producto</th>
                <th>Tipo de producto</th>
                <th>Borrar</th>
            </tr>
            <?php

    
    include ("../clases/conexion.php"); 
    $conexion = conexion::conectar();

    $query = mysqli_query($conexion, "SELECT t1.id_producto , t1.nombre_producto , t2.Tipo_producto  FROM productos t1 join tipo_producto t2 on t1.id_tipo_producto = t2.id_tipo_producto");


    $result = mysqli_num_rows($query);

    if($result > 0){
        while($data = mysqli_fetch_array($query)){

            ?>
            <tr>
                <td><?php echo $data["id_producto"]; ?></td>
                <td><?php echo $data["nombre_producto"]; ?></td>
                <td><?php echo $data["Tipo_producto"]; ?></td>
                <td>
                    <a class="link_edit" href="../controlador/eliminar_confirmar_producto.php?id=<?php echo $data["id_producto"]; ?>">Borrar</a>
                </td>
            </tr>
            <?php 
        }
    }?>
        </table>


    </section>
</body>
</html>