<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Televison'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('messa', $carrito));

// Ordenar los elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros);
rsort($numeros);
// echo "<pre>";
// var_dump($numeros);
// echo "</pre>";

// Ordenar arreglo asociativo

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premiun',
    'nombre' => 'Juan'
);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // oredena por valores orden alfavetico arsort al revez

echo "<pre>";
var_dump($cliente);
echo "</pre>";


ksort($cliente); // oredena por llaves alfavetico krsort al revez

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
