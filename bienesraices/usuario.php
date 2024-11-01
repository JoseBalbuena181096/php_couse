<?php

// Importar la conexión
require __DIR__.'/includes/config/database.php';
$db = conectarDB();

// Crear un email y un password
$email = "correo@correo.com";
$password = "12345";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";
//echo $query;

// Agregarlo a la base de datos
mysqli_query($db, $query);