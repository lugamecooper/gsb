<!DOCTYPE html>
<?php 
    include './connect.php';
    session_start();
    if (!isset($_SESSION["idRole"])) {
        header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
        exit;
    }

    if ($_SESSION["idRole"] == 2 || $_SESSION["idRole"] == 3) {
        return;
    } elseif ($_SESSION["idRole"] == 1) {
        header("Location: https://gsb.lucas-lestiennes.fr/visiteur");
        exit;
    } else {
        header("Location: https://gsb.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
        exit;
    }
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet - Comptable</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="header">
            <h1>Intranet Comptable</h1>
        </div>

        <ul>
            <li><a href=".\">Acceuil</a></li>
            <li><a href=".\validation_frais.html">Validation des fiches de frais</a></li>
            <li><a href=".\suivi_paiements.html">Suivi des paiements</a></li>
            <li style="float:right"><a class="active"
                    href="#logo">LOGO</a></li>
            <li style="float:right"><a class="active" href="#utilisateur">Nom d'utilisateur</a></li>
            <li style="float:right"><a class="active" href="#fonction">Comptable</a></li>
            <li style="float:right"><a class="active"
                    href="../logoff.php">Déconnection</a></li>
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