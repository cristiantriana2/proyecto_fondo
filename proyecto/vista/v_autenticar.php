<?php/*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
* Copyright © Todos los derechos reservados
*/
?>

<?php //Esta es la vista de la autenticacion la cual nos permitira ingresar datos para su posterior validacion ?>

<html>
    <head>
        <title>Iniciar sesión</title>

        <?php include( "../estilo_login.php" );?>
    </head>

    <body>

        <div class="login">

            <img src="../img/logo.png" class="img_logo"><br>

            <form action="../controlador/c_login.php" method="POST">
                <br><input type="text" name="correo_administrador" class="input_1" placeholder = "Correo electronico"><br><br>
                <br><input type="password" name="contrasena_administrador" class="input_1" placeholder = "Contraseña"><br><br>
                <br><input type="submit" value="Entrar" class="boton_login">
            </form>

        </div>

    </body>
</html>