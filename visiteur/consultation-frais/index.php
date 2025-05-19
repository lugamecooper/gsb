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
    if (isset($_POST["number"])){
        $number = $_POST["number"];
    }
    else{
        $number = 1;
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
            <h2>Consulter mes fiches de frais</h2>
            <form action="./" method="post">
                <label for="number">Sélectionner le mois par son numéro</label>
                <?php echo "<input type=\"number\" id=\"number\" name=\"number\" min=\"1\" max=\"12\" value=\"$number\">"; ?>
                <input type="submit" value="Afficher les fiches">
            </form>
            <?php 
                if (isset($_POST["number"])){
                    $res = $connexion -> query("SELECT * FROM FicheFrais WHERE IdVisiteur = $_SESSION[idUser] AND Mois = '$_POST[number]'; ") -> fetch();
                    if ($res){
                        echo "statut de la fiche : ".$connexion -> query("SELECT Libelle FROM Etat WHERE '$res[IdEtat]' = IdEtat;") -> fetch()[0];
                        echo "<table>";
                        echo "</table>";
                    }
                }
            ?>
        </div>
    </body>
</html>