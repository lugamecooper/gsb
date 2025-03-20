<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création user</title>
</head>
<body>
    <form method="post" action="creationUser.php">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="addresse" placeholder="addresse">
        <input type="text" name="name" placeholder="">
        <input type="text" name="name">
        <input type="text" name="name">
        <input type="text" name="name">
        <input type="text" name="name">
        <input type="text" name="name">
        <input type="text" name="name">
        <input type="text" name="name">
        <input type="submit" value="click" name="submit">
    </form>

    <?php
    function display()
    {
        echo "hello ".$_POST["studentname"];
    }
    
    if(isset($_POST['submit']))
    {
        display();
    } 
    ?>
</body>
</html>