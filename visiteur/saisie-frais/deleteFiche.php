<?php
    include '../../connect.php';
    session_start();
    if (!isset($_SESSION["idUser"])) {
        header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
        exit();
    }
    else{
        if ($_SESSION["idRole"] == 1 || $_SESSION["idRole"] == 3) {
            NULL;
        } elseif ($_SESSION["idRole"] == 2) {
            header("Location: https://gsb.lucas-lestiennes.fr/comptable");
            exit();
        } else {
            header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
            exit();
        }
    }
    $month = date('n');
    if (isset($_POST["Id"])){
        $res = $connexion -> exec("DELETE FROM LigneFraisHorsForfait WHERE Id=$_POST[Id];");
    }
    var_dump($_POST["Id"]);
    return;
    header("Location: https://gsb.lucas-lestiennes.fr/visiteur/saisie-frais");
?>