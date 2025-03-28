<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet - Visiteurs médicaux</title>
        <link rel="stylesheet" href="..\style.css">
    </head>
    <body>

        <div class="header">
            <h1>Intranet visiteurs médicaux</h1>
        </div>

        <nav class="navbar">
            <ul class="centered-links">
                <li><a href="../">Acceuil</a></li>
                <li><a href="../sf">Saisi de frais</a></li>
                <li><a href="./">Consultation fiche de frais</a></li>
            </ul>
            <ul class="right-aligned">
                <li><p>LOGO</p></li>
                <li><p>Nom d'utilisateur</p></li>
                <li><a href="#fonction">Visiteur médical</a></li>
                <li class="bouton_logoff"><a href="../logoff.php">Déconnection</a></li>
            </ul>
        </nav>

        <div class="container">
        <h2>Consulter mes fiches de frais</h2>
            <form>
                <label>Période</label>
                <input type="month">
                
                <button type="submit">Afficher mes fiches</button>
            </form>
        </div>
    </body>
</html>