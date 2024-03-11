<?php
/*Simule un sorteo de premios donde se dispone de una lista de N nombres de
personas y una lista de M premios (donde M<=N). Los premios se sortean según
su orden en la lista, al sortearse un premio se elige aleatoriamente una persona,
la persona y el premio deben ser eliminados de las listas respectivas. A
continuación, ambos deben ser añadidos a una lista de premiados. El proceso
se deberá repetir hasta sortear todos los premios. Al finalizar el sorteo, imprimir
los premiados con su premio correspondiente.*/

$n = array("Eduardo Acuña", "Alejandro Ortega", "José Saramago", "Julio Cortázar", "Moises Avalos");
$m = array("Licuadora", "Televisor Plasma", "Silla Gamer");
$resultados = array();

foreach ($m as $m){
    while(1){
        $sorteo = rand(0, count($n)-1);
        if ($n[$sorteo] != "0"){
            $resultados[$m] = $n[$sorteo];
            $n[$sorteo] = "0";
            break;
        }
    }
}

/*
for ($i=0; $i<count($m); $i++){
        $aleatorio = rand(0, count($n)-1);
        if ($n[$aleatorio] == 0){
            $ganador = $n[$aleatorio-1];
            $resultados[$ganador] =  $m[$i];
        }else {
        $ganador = $n[$aleatorio];
        $n[$aleatorio] = 0;
        $resultados[$ganador] =  $m[$i];
        } */

       /* if (in_array($ganador, $resultados)){
            $add = AddBetween($resultados, $ganador, $ganador, $m[$i]);
        }else{
            $resultados[$ganador] =  $m[$i];
        }*/


foreach ($resultados as $nombre => $premio) {
    echo "Premio: ".$nombre.". Nombre: ".$premio."<br>";
}

//print(var_dump($resultados));