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

foreach ($productos as $producto) { ?>
    <!-- echo "<li>";
    var_dump($producto['nombre']);
    echo "</li>"; -->
    <li>
        <p>Producto: <?php echo $producto['nombre'] ?></p>
        <p>Precio: <?php echo  "$ " . $producto['precio'] ?></p>
        <p><?php echo ($producto["disponible"]) ?  "Disponible" : " No disponible " ?></p>
        <!-- <?php
                // if ($producto['disponible']) {
                //     echo "<p> Disponible </p>";
                // } else {
                //     echo "<p> No disponible </p>";
                // }
                ?> -->
    </li>
<?php
}


include 'includes/footer.php';
