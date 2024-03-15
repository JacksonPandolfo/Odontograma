<?php
include('/xampp/htdocs/SoulClinic/server/config.php');
$host = DB_HOST; // geralmente "localhost" se estiver na mesma máquina
$port = DB_PORT; // geralmente 5432 para PostgreSQL
$dbname = DB_BASE;
$user = DB_USER;
$password = DB_PASSWORD;

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    // print_r("Conexão bem sucedida");
} catch (PDOException $e) {
    echo "Falha na conexão";
    die($e->getMessage());
}
