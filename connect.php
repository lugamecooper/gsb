<?php
    $dsn = 'mysql:host=localhost;dbname=GSB;charset=utf8';
    $user = 'app';
    $password = "r^J\$X_Sq&4t4rKu/E.VG";
    try {
        $connexion = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die('Echec de la connexion : '.$e->getMessage());
    }
?>