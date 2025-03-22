<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./src/logo.ico">
        <link rel="stylesheet" href="style.css">
        <title>Intranet GSB</title>
    </head>
    <div class="loader"></div> 
    <br>
    <br>
    <br>
    <body>
        <?php
            include './connect.php';
            $res = $connexion -> query("SELECT * FROM Visiteur WHERE nom = '$_POST[login]' AND password = '$_POST[password]'");
            $res = $res -> fetch();
            if ($res["idRole"] == 2){
                session_start();
                $_SESSION["idRole"]=2;
                $_SESSION["idUser"]=$res["IdVisiteur"];
                echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/comptable")</script>';
            }
            if ($res["idRole"] == 1){
                session_start();
                $_SESSION["idRole"]=2;
                $_SESSION["idUser"]=$res["IdVisiteur"];
                echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/visiteur")</script>';
            }
            if ($res["idRole"] == 3){
                session_start();
                $_SESSION["idRole"]=2;
                $_SESSION["idUser"]=$res["IdVisiteur"];
                echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/comptable")</script>';
            }
            echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/?erreur=mots de passe ou login incorect")</script>';
        ?>
    </body>
</html>