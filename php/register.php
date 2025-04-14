<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    try {   
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$full_name, $email, $password]);

        echo "Registro exitoso";
    } catch (PDOException $e) {
        echo "Error al registrar: " . $e->getMessage();
    }
}
?>
