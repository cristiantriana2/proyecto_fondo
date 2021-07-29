<?php
    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */

    /** incluyendo funciones y sesion */
    require_once '../clases/empresa_clase.php'; 
    require_once '../clases/consultas.php';

    include( "../clases/Sesiones.php" );
    sesiones::verificar_sesion();



    /**inica una conexion con mysqli a la base de datos bd_empresas */    
    $conexion = conexion::conectar();
    
     $sql = "SELECT id_tipo_empresa, tipo_empresa FROM tipo_empresa"; /**Utiliza un select para traer dos campos de la tabla tipo_empresa */

     $resultadoTiposEmpresa = $conexion->query( $sql );
     


    $empresa =  new empresa_clase(consultas::consultar_informacion_empresa($_GET["nit_empresa"]));


?>


    <div class="contenedor_editar_empresas">
        <div>
            <?php     include("v_editar_empresa_html.php"); ?>
        </div>
        <form name ="editar" method="GET" form action="../controlador/c_editar_empresa.php" id="editar_info_empresa">

            <!------------------------Captura los datos del ID seleccionado en la tabla de empresas y los muestra en los campos de value con los tads de php -->
            <br>Nit<br><input type="text" name="nit_empresa" class="input" autocomplete="off" required value="<?php echo $empresa->nit ?>"><br>
            <br>Nombre de la empresa<br><input type="text" name="nombre_empresa" class="input" autocomplete="off" required value="<?php echo $empresa->nombre_empresa ?>"><br>
            <br>Descripción de la empresa<br><input type="text" name="descripcion_empresa" class="input" autocomplete="off" required value="<?php echo $empresa->descripcion ?>"><br>
            <br>Número de contacto<br><input type="text" name="numero_contacto" class="input" autocomplete="off" required value="<?php echo $empresa->telefono  ?>"><br>
            <br>Dirección de la empresa<br><input type="text" name="direccion" class="input" autocomplete="off" requred value="<?php echo $empresa->direccion ?>"><br>
            <br>Tipo de empresa<br>
            
            <select name = "id_tipo_empresa" value =""> 
                <?php 

                   

                     while( $fila = mysqli_fetch_array( $resultadoTiposEmpresa ) )
                     {

                        
                        
                        $v1 = $fila[ 'id_tipo_empresa' ];
                        $v2 = $fila[ 'tipo_empresa' ];
                        if($empresa->tipo_empresa==$v2){

                         echo "<option value='$v1' selected='selected'> $v2 </option>";

                        }else{
                            echo "<option value='$v1'> $v2 </option>";
                        }
                     }

                ?>
            </select><br>



            <br>Estado de producción:<br>
            Si hay producción<input type="radio" name="estado_produccion" value="1" required <?php echo $empresa->estado_produccion ?"checked":"" ?>>
            No hay producción<input type="radio" name="estado_produccion" value="0" required  <?php echo !$empresa->estado_produccion ?"checked":"" ?>>
    
            <br><br><input type="submit" class="boton_aceptar" value="Aceptar"><br>
            <!--Este input permite iniciar el UPDATE de la clase editar empresa-->

        </form>


    </div>



</div>




