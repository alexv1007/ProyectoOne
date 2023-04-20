<?php
// Declarar una variable $ + identificador + asignacion del tipo de dato o valor
$Variable = 30;
$Mensaje = "El valor de la Variable es: ";
$Numero1 = 2; $Numero2 = 3; $Numero3 = 20;
$Suma = $Numero1 + $Numero2 + $Numero3;
$Resta = $Numero1 - $Numero2 - $Numero3;
$Multiplicacion = $Numero1 * $Numero2 * $Numero3;
$Division = $Numero1 / $Numero2 / $Numero3;
$Radio = 2;
define('Pi','3.1416');
$Decremento = 20;
$Incremento = 20;
echo "La suma de ".$Numero1."+".$Numero2."+".$Numero3. "es:".$Suma."<br>";
echo "La resta de ".$Numero1."-".$Numero2."-".$Numero3. "es:".$Resta."<br>";
echo "La multiplicacion de ".$Numero1."*".$Numero2."*".$Numero3. "es:".$Multiplicacion."<br>";
echo "La division de ".$Numero1."/".$Numero2."/".$Numero3. "es:".$Division."<br>";
// echo var_dump(constant('Hora))."<br>";
// echo var_dump($Suma);
// echo $Mensaje, $Variable;
// Area de un circulo
$Ejemplo = Pi * $Radio * $Radio;
$Mensaje2 = "El Area del circulo con el radio de: ".$Radio." por el valor de Pi que es: ".Pi."el resultado es: ".$Ejemplo;
echo $Mensaje2."<br>";
echo var_dump(constant('Pi'))."<br>";
echo "El valor de Descremento es: ".--$Decremento."<br>";
echo "El valor de Incremento es: ".++$Incremento."<br>";
?>