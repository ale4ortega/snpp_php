<?php
echo "<h3>Arrays 2</h3>";
$edades = array ("Moises"=>"33", "Camila"=>"25", "Samanta"=>"17");
echo "Moises tiene ".$edades["Camila"]." años";

echo "<br>";
foreach($edades as $x => $valor){
    echo "Clave = ".$x.", valor = ". $valor;
    echo "<br>";
}
?>