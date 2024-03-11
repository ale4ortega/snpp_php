<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> Dashboard </title>
    </head>
    <body>
        <h2>Sesion abierta</h2>
        <p>
        <?php
        if (isset($_POST['nombre'])){
            $_SESSION['nombre'] = $_POST['nombre'];
            echo "Bienvenido: <b> ".$_POST['nombre']."</b>";
        }else {
            if (isset($_SESSION['nombre'])){
                echo "Has iniciado sesion como: ".$_SESSION['nombre'];
            }else {
                //Si la sesión expira
                echo "Acceso restringido";
            }
        }
        ?></p>
        <br>
        <p><a href="login.php">Ir a la página inicial</a></p>
        <br>
        <p><a href="logout.php">Cerrar sesión</a></p>
    </body>
</html>