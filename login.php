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
            $hash = password_hash(password_hash($_POST["login"], PASSWORD_ARGON2I).password_hash($_POST["password"], PASSWORD_ARGON2I), PASSWORD_ARGON2I);
            echo $hash."<br>";
        ?>
    </body>
</html>