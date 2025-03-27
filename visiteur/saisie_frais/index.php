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

        <ul class="nav-bar">
            <li><a href="../../">Acceuil</a></li>
            <li><a href="./">Saisi de frais</a></li>
            <li><a href="./consultation_frais">Consultation fiche de frais</a></li>
            <div class="user-info">
                <li style="float:right">
                    <p>LOGO</p>
                </li>
                <li style="float:right">
                    <p>Nom d'utilisateur</p>
                </li>
                <li style="float:right">
                    <a href="#fonction">Visiteur médical</a>
                </li>
                <li style="float:right">
                    <a href="../logoff.php">Déconnection</a>
                </li>
            </div>
        </ul>

        <div class="container">
            <form action="#" method="post">
                <label for="nom">Nom du visiteur:</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="date_frais">Date des frais:</label>
                <input type="date" id="date_frais" name="date_frais"
                    required><br><br>

                <label for="montant">Montant:</label>
                <input type="number" step="0.01" id="montant" name="montant"
                    required><br><br>

                <label for="description">Description des frais:</label><br>
                <textarea id="description" name="description" rows="4" cols="50"
                    required></textarea><br><br>

                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </body>
</html>