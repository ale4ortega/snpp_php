<?php
print("<h3>Tabla del nueve</h3>");
$x = 1;
for($x; $x<=10; $x++){
    echo "9 x $x = ".($x*9)."<br>";
}
echo "<hr>";

for($x = 1; $x < 10; $x++){
    for($y = 1; $y <= 10; $y++){
        echo "$x x $y = ".($x*$y)."<br>";
    }
    echo "<hr>";
}

?>


