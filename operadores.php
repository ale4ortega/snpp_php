<?php
//primeras practicas de php 13/02/2024
$a = 8;
$b = 3;
print("<h3>Operaciones Aritmeticas</h3>");
echo "<br>a = $a y b = $b";
echo "<br>Suma: ".($a+$b);
echo "<br>Resta: ".($a-$b);
echo "<br>Multiplicación: ".($a*$b);
echo "<br>División: ".($a/$b);
echo "<br>Exponente: ".($a**$b);
echo "<br>Módulo: ".($a%$b);

?>

<?php
$x = 8;
$y = 3;
echo "<h3>Operadores de comparación</h3>";
echo "<br>x = $x e y = $y";
echo "<br>Igualdad: ".($x == $y);
echo "<br>Diferencia: ".($x != $y);
echo "<br>Menor: ".($x < $y);
echo "<br>Mayor: ".($x > $y);
echo "<br>Menor o igual: ".($x <= $y); 
echo "<br>Mayor o igual: ".($x >= $y);
?>

<?php
print("<h3>Operadores Lógicos O, Y, negación</h3>");
echo "A es igual a B y X es mayor a Y: ".($a == $b && $x > $y);
echo "<br>A es igual a B o X es igual a Y: ".($a == $b || $x == $y);
echo "<br>Negar B es igual a X: ".(!($b == $x))
?>
