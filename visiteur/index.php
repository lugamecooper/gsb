<!DOCTYPE html>
<?php
    include './connect.php';
    session_start();
    if (isset($_SESSION["IdVisiteur"])) {
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
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="header">
            <h1>Intranet visiteurs médicaux</h1>
        </div>
        <ul class="nav-bar">
            <li><a href=".\">Acceuil</a></li>
            <li><a href=".\saisie_frais">Saisi de frais</a></li>
            <li><a href=".\saisie_frais">Consultation fiche de frais</a></li>
            <div class="user-info">
                <li style="float:right">
                    <a class="active" href="#logo">LOGO</a>
                </li>
                <li style="float:right">
                    <a class="active" href="#utilisateur">Nom d'utilisateur</a>
                </li>
                <li style="float:right">
                    <a class="active" href="#fonction">Visiteur médical</a>
                </li>
                <li style="float:right">
                    <a class="active" href="../logoff.php">Déconnection</a>
                </li>
            </div>
        </ul>
        <div class="container">
            <h3>Saisie des frais</h3>
            <p>
                Formulaire pour entrer les frais forfaitisés (quantité pour chaque type) <br>
                Formulaire pour ajouter des frais hors forfait (date, libellé,montant) <br>
                Liste des frais saisis avec possibilité de modification/suppression
            </p>
            <h3>Consultation des fiches de frais</h3>
            <p>
                Sélecteur de mois pour afficher une fiche de frais <br>
                Tableau avec les frais forfaitisés et hors forfait <br>
                Indicateur d'état de la fiche (saisie, validée, mise en paiement, remboursée)
            </p>
        </div>
    </body>
</html>