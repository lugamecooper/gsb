<!DOCTYPE html>
<?php
    include '../../connect.php';
    session_start();
    if (!isset($_SESSION["idUser"])) {
        header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
    }
    else{
        if ($_SESSION["idRole"] == 1 || $_SESSION["idRole"] == 3) {
            NULL;
        } elseif ($_SESSION["idRole"] == 2) {
            header("Location: https://gsb.lucas-lestiennes.fr/comptable");
        } else {
            header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
        }
    }
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet - Visiteurs médicaux</title>
        <link rel="stylesheet" href="..\style.css">
    </head>
    <body>
        <?php include "../include/header.inc.php"; header_element("..", "..", "..", "../..");?>
        <div class="container">
            <h1>Compléter la fiche de frais</h1>
            <h2>Compléter les Frais compris</h2>
            <form>
                <?php
                    $res_2 = $connexion -> query("SELECT libelle, quantite FROM LigneFraisForfait INNER JOIN FraisForfais ON FraisForfais.idFrais = LigneFraisForfait.idFrais WHERE Mois = $number AND IdVisiteur = $_SESSION[idUser]; ") -> fetchAll();
                    foreach ($res_2 as $e){
                        echo "<label for=\"number\">$e[0]</label><input type=\"number\" id=\"number\" name=\"number\" value=\"$e[1]\">";
                    }
                ?>
                <button type="submit">Soumettre</button>
            </form>
        </div>
    </body>
</html>