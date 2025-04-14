<?php

$host = 'dpg-cvu9026uk2gs7387mkk0-a.oregon-postgres.render.com';  
$port = '5432';  
$dbname = 'db_proyecto_029a';  
$user = 'db_proyecto_029a_user';  
$password = '2yiuLvtnNZXaRPs54qL3GxYJvnN9tfWB';  

// Crear la cadena de conexión
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

// Intentar establecer la conexión
try {
    $pdo = new PDO($dsn, $user, $password);
    // Activar el modo de errores       
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>
