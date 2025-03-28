<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet - Comptable</title>
        <link rel="stylesheet" href="..\style.css">
    </head>
    <body>

        <div class="header">
            <h1>Intranet Comptable</h1>
        </div>

        <nav class="navbar">
            <ul class="centered-links">
                <li><a href="../">Acceuil</a></li>
                <li><a href="./">Suivi des paiements</a></li>
                <li><a href="../vf">Validation des fiches de frais</a></li>
            </ul>
            <ul class="right-aligned">
                <li><p>LOGO</p></li>
                <li><p>Nom d'utilisateur</p></li>
                <li><a href="#fonction">Comptable</a></li>
                <li class="bouton_logoff"><a href="../../logoff.php">Déconnection</a></li>
            </ul>
        </nav>

        <div class="container">
        <h2>Suivre le paiement des fiches de frais</h2>
            <form>
                <label>Numéro de fiche de frais</label>
                <input type="text" required>
                
                <button type="submit">Vérifier l'état du paiement</button>
            </form>
        </div>
    </body>
</html>