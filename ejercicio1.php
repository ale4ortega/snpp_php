<?php

$llueve = "no";
$es_feriado = "no";
$es_finde = "no";

if($llueve == "si" || $es_feriado == "si" || $es_finde == "si"){
    print("Me quedo en casa");
}else {
    print("Me voy al SNPP");
}

#parte 2          
print("<hr>");

$llueve2 = null;
$es_feriado2 = null;
$es_finde2 = null;

if($llueve2 || $es_feriado2 || $es_finde2){
    print("Me quedo en casa DOS");
}else {
    print("Me voy al SNPP DOS");
}

?>