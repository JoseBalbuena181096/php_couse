<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 200,
        'disponible' => true
    ]
];

echo "<pre>";
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);
var_dump(($json));
var_dump(($json_array));

echo "</pre>";

include 'includes/footer.php';
