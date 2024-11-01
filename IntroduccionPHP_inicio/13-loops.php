<?php include 'includes/header.php';

// While
$i = 0; // Inicializador

while ($i < 10) {
    //echo $i . "<br>";
    $i++;
}

echo "<br>";
// Do while
$i = 0;
do {
    //echo $i . "<br>";
    $i++;
} while ($i < 10);


// for loop
for ($i = 0; $i < 10; $i++) {
    // echo $i . "<br>";
}

/**
 * multiplo de 3 imprimir Fizz
 * multiplo de 5 Buzz
 * 3 y 5 imprimir  FIZZ BUZZ
 */

for ($i = 1; $i < 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        //echo $i . 'Fizz Buzz';
        //echo "<br>";
    } else if ($i % 3 === 0) {
        //echo $i . 'Fizz';
        //echo "<br>";
    } else if ($i % 5 === 0) {
        //echo $i . 'Buzz';
        //echo "<br>";
    }
}

// For each
$clientes = array('Pedro', 'Juan', 'karen');
// foreach ($clientes as $cliente) {
//     echo $cliente . "<br>";
// }

foreach ($clientes as $cliente) :
//echo $cliente . "<br>";
endforeach;

for ($i = 0; $i < count($clientes); $i++) {
    //echo $clientes[$i] . "</br>";
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach ($cliente as $key => $valor):
    echo  $key . " - " . $valor . "<br>";
endforeach;

include 'includes/footer.php';
