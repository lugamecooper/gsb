<?php
    include '../../connect.php';
    session_start();
    if (!isset($_SESSION["idUser"])) {
        header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
    }
    else{
        if ($_SESSION["idRole"] == 2 || $_SESSION["idRole"] == 3) {
            NULL;
        } elseif ($_SESSION["idRole"] == 1) {
            header("Location: https://gsb.lucas-lestiennes.fr/visiteur");
        } else {
            header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
        }
    }
    $month = date('n');
    if (isset($_POST["Valid"])){
        $connexion -> exec("UPDATE FicheFrais SET IdEtat = 'VA' WHERE idVisiteur = $_SESSION[idUser] AND Mois = $month;");
    }
    header("Location: https://gsb.lucas-lestiennes.fr/comptable/validation-frais");
?>