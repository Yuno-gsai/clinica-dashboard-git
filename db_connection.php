<?php
// db_connection.php

$servername = "localhost";
$username = "root"; // TU USUARIO DE MYSQL
$password = "Coc864020";     // TU CONTRASEÑA DE MYSQL (vacío en XAMPP/WAMP por defecto)
$dbname = "clinica_db2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>