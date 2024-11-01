<?php include 'includes/header.php';

// util para ver contenidos de un array
$carrito = ['Tablet', 'Television', 'Computadora'];

// Acceder a un elemento del array
echo $carrito[1];
// añade un elemento en el indice
$carrito[3] = "Nuevo producto";

// añade un elemento al final
array_push($carrito, "Audifonos");

// añade al inicio 
array_push($carrito, "Smartwatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';
