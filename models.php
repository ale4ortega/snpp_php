<?php

abstract class Persona{
    private $nombre_apellido;
    private $fecha_nacimiento;
    private $cedula;
    
    public function __construct($nombre_apellido, $fecha_nacimiento, $cedula){
        $this->nombre_apellido = $nombre_apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->cedula = $cedula;
    }

    public function set_nombre_apellido($n){
        $this->nombre_apellido = $n;
    }

    public function get_nombre_apellido(){
        return $this->nombre_apellido;
    }

    public function get_valor(){
        return "nada";
    }
}

//$p = new Persona("Moises", "08/08/1988", "4645896");
//No se puede instanciar una clase abstracta
class Cliente extends Persona {
    private $telefono;
    private $direccion;

    public function __construct($nombre_apellido, $fecha_nacimiento, $cedula, $telefono, $direccion){
        parent::__construct($nombre_apellido, $fecha_nacimiento, $cedula);
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    public function set_telefono($t){
        $this->telefono = $t;
    }

    public function get_telefono($t){
        return $this->telefono;
    }

    public function get_valor(){
        return "algo diferente, un JSON";
    }
}





?>