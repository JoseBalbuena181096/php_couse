<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 40;
$numero4 = "20";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 == $numero2);
echo "<br/>";

var_dump($numero1 === $numero4);
echo "<br/>";

// si izquierda es menor -1, si son iguales 0 y 1 si izquierda es mayor
var_dump($numero1 <=> $numero2);
echo "<br/>";

include 'includes/footer.php';
