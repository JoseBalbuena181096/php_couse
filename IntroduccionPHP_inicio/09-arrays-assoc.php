<?php

use function PHPSTORM_META\map;

include 'includes/header.php';
$cliente = [
    "nombre" => "juan",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premiun",
        "disponible" => false
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente["nombre"];
echo $cliente["informacion"]["tipo"];
echo $cliente["informacion"]["disponible"];

$cliente["codigo"] = 12345;

include 'includes/footer.php';
