<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

// if ($autenticado && $admin)
if ($autenticado || $admin) {
    echo "Usuario autenticado";
} else {
    echo "Usuario no autenticado";
}

// If anidados
$cliente = [
    'nombre' => "Juan",
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premiun'
    ]
];

// verificar si el usuario esta vacio

echo "<br>";
if (!empty($cliente)) {
    echo "El arreglo del cliente no esta vacio";
    if ($cliente['saldo'] > 0) {
        echo "El saldo del cliente esta disponible";
    } else {
        echo "No ahy saldo";
    }
}

// else if
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es Premium';
} else {
    echo 'No hay cliente definido o no tiene saldo o no es primium';
}

echo "<br>";

$tecnologia = 'PHP';
switch ($tecnologia) {
    case 'PHP':
        echo 'PHP un excelente lenguaje!';
        break;
    case 'Javascript':
        echo 'El lenguaje de la web!';
        break;
    case 'HTML':
        echo 'PHP un excelente lenguaje!';
        break;
    default:
        echo "Algún lenguaje que no se cual es";
        break;
}



include 'includes/footer.php';
