<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./src/logo.ico">
        <link rel="stylesheet" href="style.css">
        <title>Intranet GSB</title>
    </head>
    <body>
        <p>tg</p>
        <?php
            include './connect.php';
            $res = $connexion -> query("SELECT * FROM visiteur WHERE nom = '$_POST[login]' AND password = '$_POST[password]'") or die("test");
            $res = $res -> fetch();
            echo "<p>test</p>";
            if ($res["idRole"] == 2){
                $_COOKIE["info_log"] = $res;
                //echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/comptable")</script>';
                echo $_COOKIE["info_log"]["nom"]."<br>";
                echo $_COOKIE["info_log"]["prenom"]."<br>";
                echo $_COOKIE["info_log"]["idRole"]."<br>";
                echo $_COOKIE["info_log"]["password"]."<br>";
            }
            $_COOKIE["info_log"] = $res;
            //echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/comptable")</script>';
            echo $_COOKIE["info_log"]["nom"]."<br>";
            echo $_COOKIE["info_log"]["prenom"]."<br>";
            echo $_COOKIE["info_log"]["idRole"]."<br>";
            echo $_COOKIE["info_log"]["password"]."<br>";
        ?>
    </body>
</html>