<?php include 'includes/header.php';


// conocer la extension de un string
$nombreCliente = " Juan Pablo ";
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacio en blanco
$texto = trim($nombreCliente);
echo $texto;

// Convertir a mayusculas
echo strtoupper($nombreCliente);

// Convertir a minusculas
echo strtolower($nombreCliente);

$mail = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail) === strtolower($mail2));

// remplazar codena
echo str_replace('Juan', 'J', $nombreCliente);

// Revizar si un string existe
echo strpos($nombreCliente, 'ed');

echo "<br/>";
// template string
$tipoCliente = "Premiun";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "El cliente {$nombreCliente} es {$tipoCliente} ";

include 'includes/footer.php';
