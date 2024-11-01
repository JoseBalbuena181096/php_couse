<?php include 'includes/header.php';
// Conectar a la BD con PDO


$dsn = 'mysql:host=localhost;dbname=bienesraices_crud';
$username = 'root';
$password = 'root';

$db = new PDO($dsn, $username, $password);

// creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Consultar la BD
// $propiedades = $db->query($query)->fetchObject();
// var_dump($propiedades);

// preparamos el query
$stmt = $db->prepare($query);

// ejecutamos el query
$stmt->execute();

// Obtener los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Utilizar los resultados
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

include 'includes/footer.php';