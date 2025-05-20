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
            <form method="post" action="./">
                <table>
                    <?php
                        $month = date('n');
                        $res_2 = $connexion -> query("SELECT libelle, quantite FROM LigneFraisForfait INNER JOIN FraisForfais ON FraisForfais.idFrais = LigneFraisForfait.idFrais WHERE Mois = $month AND IdVisiteur = $_SESSION[idUser]; ") -> fetchAll();
                        foreach ($res_2 as $e){
                            echo "<tr><td><label for=\"number\">$e[0]</label></td><td><input style=\"margin-left:5px;\" required=\"required\" type=\"number\" id=\"number\" name=\"number\" value=\"$e[1]\"></td>";
                        }
                    ?>
                </table>
                <br>
                <br>
                <h2>Compléter les Frais Hors Forfait</h2>
                <table>
                    <?php
                        $month = date('n');
                        $res_2 = $connexion -> query("SELECT libelle , dateHorsFrais, montant FROM LigneFraisHorsForfait WHERE LigneFraisHorsForfait.Mois = $month AND LigneFraisHorsForfait.IdVisiteur = $_SESSION[idUser];") -> fetchAll();
                        foreach ($res_2 as $e){
                            echo "<tr><td><label for=\"number\">$e[0]</label></td><td><input style=\"margin-left:5px;\" required=\"required\" type=\"date\" id=\"date\" name=\"date\" value=\"$e[1]\"></td>";
                        }
                    ?>
                    <tr><td><input placeholder="entrer le libelle" name="new_libelle"/></td><td>Sélectionner la date:<input type="date" name="new_date"></td><td>Montant:<input type="number" name="new_price"></td>
                </table>
                <input type="submit" value="Soumettre"/>
            </form>
        </div>
    </body>
</html>