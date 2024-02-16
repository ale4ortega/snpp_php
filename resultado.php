<?php

function sumar($x, $y){
    return $x+$y;
}

function restar($x, $y){
    return $x-$y;
}

function multiplicar($x, $y){
    return $x*$y;
}

function dividir($x, $y){
    return $x/$y;
}
//Variable global
    $numero1 = $_GET["num1"];
    $numero2 = $_GET["num2"];
    $operacion = $_GET["op"];
    

if ($operacion == "suma"){
    $resultado = sumar($numero1, $numero2);
}else if ($operacion == "restar"){
    $resultado = restar($numero1, $numero2);
}else if ($operacion == "multiplicacion"){
    $resultado = multiplicar($numero1, $numero2);
}else if ($operacion == "division"){
    $resultado = dividir($numero1, $numero2);
}

echo "El resultado es: ".$resultado;




?>