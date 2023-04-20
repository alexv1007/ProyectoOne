<?php
/* foreach(expresion as $Variable){
    acciones que se tardan dentro del bucle
} 
*/
$Arreglo = ["ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",54,'d',10.5,true,false,5];
echo "<pre>\n";
var_dump($Arreglo);
echo "</pre>\n";
foreach($Arreglo as $Recorrido){
    echo "<p>$Recorrido</p>\n";
}
echo "Termina el ciclo <br>";
?>