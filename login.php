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
        <?php
            $password = $_POST["password"];
            $login = $_POST["login"];
            $password = password_hash($password, PASSWORD_ARGON2I);
            $login = password_hash($login, PASSWORD_ARGON2I);
            $hash = password_hash($login.$password, PASSWORD_ARGON2I);
            echo $password."<br>";
            echo $login."<br>";
            echo $hash."<br>";
        ?>
    </body>
</html>