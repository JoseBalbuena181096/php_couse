<?php include 'includes/header.php';
// Conectar ala BD con mysqli

$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";
// $resultado = $db->query($query);

// while($row = $resultado->fetch_assoc()):
//     var_dump($row);
// endwhile;

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo, $imagen);

// Asignamos el resultado
// $stmt->fetch();

// // imprimir el resultado
// var_dump($titulo);
// var_dump($imagen);
while($stmt->fetch()):
    // imprimir el resultado
    var_dump($titulo);
    var_dump($imagen);
endwhile;
include 'includes/footer.php';