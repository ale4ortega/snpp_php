<?php
include "models.php";

function agregar_cliente(){
    if (isset($_POST)){
        $nombre_apellido = $_POST['nombre_apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        //instanciar cliente
        $cliente = new Cliente($nombre_apellido, $fecha_nacimiento, $cedula, $telefono, $direccion);

        echo "Se ha creado el cliente ".$cliente->get_nombre_apellido();



    }else { 
        return "equisde";
    }
}

function listar_clientes(){
    return "listar clientes";
}


if (isset($_POST)){
    agregar_cliente();
}



?>