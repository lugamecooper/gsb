<!DOCTYPE html>
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
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet - Comptable</title>
        <link rel="stylesheet" href="..\style.css">
    </head>
        <?php include "../include/header.inc.php"; header_element("..", "..", "..", "../..");?>
        <div class="container">
        <h2>Valider une fiche de frais</h2>
            <form method="post" action="./">
                <label for="visiteur">Choisissez le visiteur</label>
                <select name="visiteur" id="visiteur" required>
                    <option value="">-- Choisir --</option>
                    <?php
                        $res = $connexion -> query("SELECT IdVisiteur, nom, prenom FROM Visiteur WHERE idRole = 1 OR idRole = 3");
                        while ($row = $res->fetch()) {
                            echo "<option value=\"$row[id]'\">{$row['prenom']} {$row['nom']}</option>";
                        }
                    ?>
                </select><br>
                <label for="mois">Choisissez le mois</label>
                <select name="mois" id="mois" required>
                    <option value="">-- Choisir --</option>
                    <?php
                        for($i =1; $i <= 12; $i ++) {
                            echo "<option value=\"{$i}\">{$i}</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="vallidez la séléction">
            </form>
            <?php 
                var_dump($_POST);
                if(isset($_POST["visiteur"])){
                    var_dump($connexion->query("SELECT * FROM FicheFrais WHERE Mois = $_POST[mois] AND $_POST[visiteur]")->fetchAll());
                }
            ?>
        </div>
    </body>
</html>