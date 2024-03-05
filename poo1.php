<?php

class Automovil {
    public $color;
    public $marca; 
    public $motor;

    public function set_color($color){
        $this->color = $color;
    }

    public function get_color() {
        return $this->color;
    }

    public function get_datos(){
        return "Marca: ".$this->marca.", Motor: ".$this->motor;
    }
}
//crear 3 objetos de tipo automovil
$auto1 = new Automovil();
$auto1->color= 'verde';
$auto1->motor = 2.0;
$auto1->marca = 'Toyota';

$auto2 = new Automovil();
$auto2->color = 'gris';
$auto2->motor = 1.5;
$auto2->marca = 'Ford';

$auto3 = new Automovil();
$auto3->color = 'rojo';
$auto3->motor = 1.3;
$auto3->marca = 'Nissan';
?>

<h3>Imprimir los colores de autos disponibles </h3>
<?php
    echo "Primer auto: ".$auto1->get_datos();
    echo "<br>Segundo auto: ".$auto2->get_datos();
    echo "<br>Tercer auto: ".$auto3->get_datos();