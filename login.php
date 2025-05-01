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
            $name = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $res = $connexion -> query("SELECT * FROM Visiteur WHERE nom = '$name' AND password = '$password'");
            $res = $res -> fetch();
	        if ($res["idRole"] == 2){
                session_start();
                $_SESSION["idRole"]= 2;
                $_SESSION["idUser"]= $res["IdVisiteur"];
                header("Location: https://gsb2.lucas-lestiennes.fr/comptable");
                exit();
            }
            if ($res["idRole"] == 1){
                session_start();
                $_SESSION["idRole"]= 1;
                $_SESSION["idUser"]= $res["IdVisiteur"];
                header("Location: https://gsb2.lucas-lestiennes.fr/visiteur");
                exit();
            }
            if ($res["idRole"] == 3){
                session_start();
                $_SESSION["idRole"]= 3;
                $_SESSION["idUser"]= $res["IdVisiteur"];
                header("Location: https://gsb2.lucas-lestiennes.fr/comptable");
                exit();
            }
	    sleep(3);
	    header("Location: https://gsb2.lucas-lestiennes.fr/?erreur=login ou mots de passe incorecte");
        ?>
    </body>
</html>
