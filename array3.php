<?php
echo "<h3>Arrays 3</h3>";
$productos = array(
    array("Heladera", 2500000, 18),
    array("Microondas", 1500000, 9),
    array("Cocina", 590000, 21),
    array("Licuadora", 450000, 15),
    array("Mixer", 260000, 5),
    array("Ventilador", 150000, 15),
);

//Imprimir todos los valores
for($x = 0; $x < count($productos); $x++){
    for ($z = 0; $z <= 2; $z++){
        echo "<br>".$productos[$x][$z];
    }
}
//imprimir solo los productos con precio menor o igual a un millón
echo "<hr>";
echo "<h2>Productos que cuestan menos de un millón</h2>";
for($y = 0; $y < count($productos); $y++){
    if ($productos[$y][1] <= 1000000){
        echo "<br>".$productos[$y][0];
        echo ", ".$productos[$y][1];
    }
}

?>

<?php
echo "<h2>Con foreach</h2>";

foreach($productos as $p){
    foreach($p as $item){
        print($item." | ");
    }
}
