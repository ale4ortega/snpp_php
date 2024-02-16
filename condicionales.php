<?php
print("<h3>Edad</h3>");
$edad = 15;

if($edad >= 18 && $edad <= 100){
    echo "<br>Eres mayor de edad";
} else if($edad < 18 && $edad >=0){
    echo "<br>Eres menor de edad";
}else {
    echo "<br>Error, dato introducido no válido";
}

switch($edad){
    case 18:
        echo "<br>Tienes 18";
        break;
    case 15:
        echo "<br>Tienes 15";
        break;
    default:
        echo "<br>Nada que celebrar";
}