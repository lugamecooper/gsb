<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./src/logo.ico">
        <link rel="stylesheet" href="style.css">
        <title> Intranet GSB </title>
        <title> Intranet GSB </title>
    </head>
    <body>

        <div class="login-container">
            <form id="login-form" action="login.php" method="post">
                <label for="login">Nom d'utilisateur :</label>
                <input type="text" id="login-username" name="login" required autocomplete="username" autocapitalize="none" autocorrect="off">

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required autocomplete="current-password" autocapitalize="none" autocorrect="off">

                <button type="submit">Connexion</button>

                <?php
                    session_start();
                    $_SESSION["idRole"] = NULL;
                    $_SESSION["idUser"] = NULL;
                    error_reporting(E_ERROR | E_PARSE);
                    if (isset($_GET["erreur"])){
                        echo "<p>$_GET[erreur]</p>";
                    }
                ?>
            </form>
        </div>
    </body>
</html>