<?php
include("db.php");

if (!$conn) {
    // Si la conexión falla, muestra el error y detiene el script
    echo "Conexion exitosa";
}else{
    echo "error";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");

    if (!$stmt) {
        // Error al preparar la consulta
        echo "error al preparar la consulta: " . $conn->error;
        exit;
    }

    $stmt->bind_param("sss", $full_name, $email, $password);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error al ejecutar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
