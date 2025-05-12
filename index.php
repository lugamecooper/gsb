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

        <div class="login-container">
            <h1>Bienvenue chez GSB</h1>

            <form id="login-form" action="login.php" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input type="login" id="username" name="login" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>

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