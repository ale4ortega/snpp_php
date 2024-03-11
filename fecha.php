<!DOCTYPE html>
<html>
    <header>
        <h1>Fecha</h1>
    </header>
    <body>
<?php
/*Cree un array con los meses del año en letras e implemente un programa que
imprima la fecha en el formato de día – mes en letras – año. Ejemplo: 8 de agosto
de 1988*/

$dia = date("j");
$mes = date("n");
$ano = date("Y");

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

/*
If ($mes == 1){
    $mes = $meses[];
}
If ($mes == 2){
    $mes = "Febrero";
}
If ($mes == 3){
    $mes = "Marzo";
}
If ($mes == 4){
    $mes = "Abril";
}
If ($mes == 5){
    $mes = "Mayo";
}
If ($mes == 6){
    $mes = "Junio";
}
If ($mes == 7){
    $mes = "Julio";
}
If ($mes == 8){
    $mes = "Agosto";
}
If ($mes == 9){
    $mes = "Septiembre";
}
If ($mes == 10){
    $mes = "Octubre";
}
If ($mes == 11){
    $mes = "Noviembre";
}
If ($mes == 12){
    $mes = "Diciembre";
}
*/
$i=0;
for ($i; $i<=12; $i++){
    if ($mes == $i-1){
        $mes = $meses[$i];
        break;
    }
}   

echo "<br>Hoy es: ".$dia." de ".$mes." de ".$ano;




?>






