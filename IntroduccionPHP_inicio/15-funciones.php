
<?php


include 'includes/header.php';


function sumar(int $numero1 = 0, int $numero2 = 0)
{
    echo $numero1 + $numero2;
}

sumar(numero2: 10,  numero1: 3);
sumar(10, 'jol');

include 'includes/footer.php';
// require cosas criticas include templates, require_ones