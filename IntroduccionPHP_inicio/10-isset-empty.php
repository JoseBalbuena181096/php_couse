<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$cliente3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty revisa si un arreglo esta vacio
var_dump(empty($cliente));
var_dump(empty($cliente2));
var_dump(empty($cliente3));

// Isset, revisa si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump((isset($clientes)));
var_dump((isset($clientes2)));
var_dump((isset($clientes3)));
var_dump((isset($clientes4)));

// Permite revisar su una ppropiedad de un arreglo asociativo existe
var_dump(isset($cliente['code']));

include 'includes/footer.php';
