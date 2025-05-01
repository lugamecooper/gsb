<?php
    include '../connect.php';
    session_start();
    if (!isset($_SESSION["idUser"])) {
        header("Location: https://gsb2.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
    }
    else{
        if ($_SESSION["idRole"] == 1 || $_SESSION["idRole"] == 3) {
            $res = $connexion -> query("SELECT * FROM Visiteur WHERE IdVisiteur = $_SESSION[idUser];") -> fetch();
            var_dump($res);
            $name = $res["nom"];
            $prenom = $res["prenom"];
        } elseif ($_SESSION["idRole"] == 2) {
            header("Location: https://gsb2.lucas-lestiennes.fr/comptable");
        } else {
            header("Location: https://gsb2.lucas-lestiennes.fr/?erreur=veuillez vous connecter");
        }
    }
?>
<!DOCTYPE html>
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

        <nav class="navbar">
            <ul class="centered-links">
                <li><a href="./">Acceuil</a></li>
                <li><a href="./saisie-frais">Saisi de frais</a></li>
                <li><a href="./consultation-frais">Consultation fiche de frais</a></li>
            </ul>
            <ul class="right-aligned">
                <li><p>LOGO</p></li>
                <li><?php echo "<p>$name $prenom</p>"; ?></li>
                <li><a href="#fonction">Visiteur médical</a></li>
                <li class="bouton_logoff"><a href="../logoff.php">Déconnection</a></li>
            </ul>
        </nav>

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