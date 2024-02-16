<!doctype html>
<html>
<head>
    <title>Pares e impares </title>
    <meta charset="UTF-8"/>
    <style>
        .estilo_par{
            color:red;
        }
        .estilo_impar{
            color:green;
        }
    </style>
</head>
<body>
<?php
//Imprimir numeros del 1 al 100
//Imprimir los pares en rojo e impares en verde

for($x=1 ; $x <=100 ; $x++){
    if ($x%2==0){
        echo "<p class='estilo_par'> $x </p>";
    }else{
        echo "<p class='estilo_impar'> $x </p>";
    }
}

?>
</body>
</html>