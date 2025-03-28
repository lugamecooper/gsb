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
            header("Location: https://gsb.lucas-lestiennes.fr/v");
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
        <link rel="stylesheet" href="..\style.css">
    </head>
    <body>

        <div class="header">
            <h1>Intranet Comptable</h1>
        </div>

        <nav class="navbar">
            <ul class="centered-links">
            <li><a href="../">Acceuil</a></li>
            <li><a href="../sp">Suivi des paiements</a></li>
            <li><a href="./">Validation des fiches de frais</a></li>
            </ul>
            <ul class="right-aligned">
                <li><p>LOGO</p></li>
                <li><p>Nom d'utilisateur</p></li>
                <li><a href="#fonction">Comptable</a></li>
                <li class="bouton_logoff"><a href="../../logoff.php">Déconnection</a></li>
            </ul>
        </nav>

        <div class="container">
        <h2>Valider une fiche de frais</h2>
            <form> <br>
                <label>Sélection du visiteur</label>
                <select>
                    <option>Visiteur 1</option>
                    <option>Visiteur 2</option>
                </select>
                <br>
                <label>Liste des frais soumis</label>
                <textarea disabled>Affichage des frais en attente...</textarea>
                <br>
                <label>Commentaire</label>
                <textarea></textarea>
                <br>
                <button type="submit">Accepter</button>
                <button type="submit">Refuser</button>
            </form>
        </div>
    </body>
</html>