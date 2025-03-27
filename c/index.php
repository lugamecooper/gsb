<!DOCTYPE html>
<?php
    include './connect.php';
    session_start();
    if (isset($_SESSION["IdVisiteur"])) {
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
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet - Comptable</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <div class="header">
            <h1>Intranet Comptable</h1>
        </div>
        
        <ul class="nav-bar">
            <li><a href=".\">Acceuil</a></li>
            <li><a href=".\sp">Suivi des paiements</a></li>
            <li><a href=".\vf">Validation des fiches de frais</a></li>
            <div class="user-info">
                <li style="float:right">
                    <p>LOGO</p>
                </li>
                <li style="float:right">
                    <p>Nom d'utilisateur</p>
                </li>
                <li style="float:right">
                    <a href="#fonction">Comptable</a>
                </li>
                <li style="float:right">
                    <a href="../logoff.php">Déconnection</a>
                </li>
            </div>
        </ul>

        <div class="container">
            <h3>Validation des fiches de frais</h3>
            <p>Sélection d’un visiteur et d’un mois <br>
                Affichage des détails de la fiche <br>
                Modification des frais forfaitisés <br>
                Suppression ou report des frais hors forfait <br>
                Bouton pour valider la fiche</p>
            <h3>Suivi des paiements</h3>
            <p>Liste des fiches en attente de paiement <br>
                Détail des fiches mises en paiement <br>
                Bouton pour marquer comme "Remboursé"</p>
        </div>
    </body>
</html>