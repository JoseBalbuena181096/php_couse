<?php include 'includes/header.php';

$nombre = "Juan";
echo $nombre;

// reasignar variable 
$nombre = "Juan 2";

//Crear una constante
define('constante', "Este es el valor de la constante");

var_dump($nombre);
echo constante;

const constante2 = "Hola2";
echo constante2;

$nombreCliente = "Pedro";

include 'includes/footer.php';
