<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./src/logo.ico">
        <link rel="stylesheet" href="style.css">
        <title> Intranet GSB </title>
    </head>
    <body>
            <div class="login_form">
                <form action="login.php" method="post">
                    <img class="logo" alt="logo GSB" src="./src/logo-gsb.png">
                    <p>Bienvenue chez GSB</p>
                    <input type="login" name="login" placeholder="Nom d'utilisateur" autocapitalize="false" ><br>
                    <input type="password" name="password" placeholder="Mot de passe"><br>
                    <input type="submit" value="Connexion"><br>
                    <?php
                        session_start();
                        $_SESSION["idRole"] = NULL;
                        $_SESSION["idUser"] = NULL;
                        error_reporting(E_ERROR | E_PARSE);
                        try{
                            if ($_GET["erreur"]){
                                echo "<p>$_GET[erreur]</p>";
                            }
                        }catch(Error){
                            NULL;
                        }
                    ?>
                </form>
            </div>
    </body>
</html>