<?php
class Persona {
    public $nombre;
    public $telefono;

    public function __construct($nomb, $tel){
        $this->nombre = $nomb;
        $this->telefono = $tel;
    }

    public function obtener_datos() {
        return "Nombre: ".$this->nombre.". Telefono: ".$this->telefono;
    }
}

class Alumno extends Persona {
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno){
        parent::__construct($nomb, $tel);
        $this->grado = $grado;
        $this->turno = $turno; 
    }

    public function obtener_datos(){
        return parent::obtener_datos()."Grado: ".$this->grado.". Turno: ".$this->turno;
    }
}

?>

<h3>Crear un objeto array de la clase alumno</h3>


<?php

$alumno1 = array(
    new Alumno("Camila", "0961123466", "Tercero - Nivel Medio", "Tarde"),
    new Alumno("Angel", "0961123589", "Preescolar", "Mañana"),
    new Alumno("Eduardo", "0985123589", "Noveno", "Noche")
)

?>

<h3>Imprmir sus datos con foreach</h3>

<?php
foreach($alumno1 as $alumno1){
    echo $alumno1->obtener_datos();
    echo "<br>";
}

?>

