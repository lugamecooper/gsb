<?php
$dsn = 'mysql:host=localhost;dbname=GSB;charset=utf8';
$user = 'root';
$password = 'root';

try {
    $connexion = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
}
?>