<?php
/* Diseñar e implementar una clase llamado Perro que herede de Animal y que
tiene datos de instancia que representa el nombre del perro y la edad (agregar
las propiedades necesarias en la clase Animal). Definir el constructor del perro
para inicializar los datos de instancia. Incluya los métodos get y set. Incluir un
método para calcular y devolver la edad del perro en "años-persona" (siete veces
la edad del perro). Incluir un método to_string que devuelva una descripción del
perro. El método to_string debe ser polimórfica. El nombre y la edad deben ser
atributos privados (encapsulados) y los métodos deben ser la forma de acceder
a los valores. */

class Animal {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->edad = $edad;
        $this->nombre = $nombre;
    }

    public function set_edad($edad){
        $this->edad = $edad;
    }

    public function get_edad(){
        return $this->edad;
    }

    public function get_nombre(){
        return $this->nombre;
        
    }

    public function set_nombre($nombre){
        $this->nombre = $nombre;
    }

    public function to_string(){
        return "Soy un animal ".$this->nombre;
    }
}

class Perro extends Animal {

    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }

    public function to_string(){
        return "Soy un perro, mi nombre es ".parent::get_nombre();
    }

    public function get_edad(){
        return parent::get_edad() * 7;
    }
}

$el_perro = new Perro("Firulais", 2);

print($el_perro->get_nombre());
echo "<br>";
print($el_perro->get_edad());
echo "<br>";    
print($el_perro->to_string());