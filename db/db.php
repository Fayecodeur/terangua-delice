<?php
require_once __DIR__ . '/../env.php';
loadEnv(__DIR__ . '/../.env');


$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$name = $_ENV['DB_NAME'];

$dsn = "mysql:dbname=$name;host=$host";

try {
    $db = new PDO($dsn, $user, $pass);
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
