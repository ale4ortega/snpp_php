<?php
echo "<h3>Arrays</h3>";

$dia[0] = "lunes";
$dia[1] = "martes";
$dia[2] = "miercoles";
$dia[3] = "jueves";
$dia[4] = "viernes";
$dia[5] = "sabado";
$dia[6] = "domingo";

$mes = array("enero", "febrero", "marzo");
//mostrar el viernes
echo "Día: ".$dia[5]."<br>";
//imprimir febrero
echo "Mes: ".$mes[1];
?>

<?php
echo "<hr>";
$autos = array("Volvo", "BMW", "Toyota");
$arrayLongitud = count($autos);

for($x=0; $x<$arrayLongitud; $x++){
    echo "<br>Marca: ".$autos[$x];
}
?>

<?php
echo "<hr>";
for($y=0; $y<count($dia); $y++){
    
    if ($y == date("N") - 1){
        echo "<p style = 'color:red'> $dia[$y]</p>";
    }else{
        echo "<br>".$dia[$y];
    }

}