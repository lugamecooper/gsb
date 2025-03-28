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
                <li><a href="./">Saisi de frais</a></li>
                <li><a href="../cf">Consultation fiche de frais</a></li>
            </ul>
            <ul class="right-aligned">
                <li><p>LOGO</p></li>
                <li><p>Nom d'utilisateur</p></li>
                <li><a href="#fonction">Visiteur médical</a></li>
                <li class="bouton_logoff"><a href="../logoff.php">Déconnection</a></li>
            </ul>
        </nav>

        <div class="container">
            <h2>Renseigner une fiche de frais</h2>
            <form>
                <label>Date de la dépense</label>
                <input type="date" required>
                
                <label>Montant (€)</label>
                <input type="number" required>
                
                <label>Type de dépense</label>
                <select>
                    <option>Hébergement</option>
                    <option>Transport</option>
                    <option>Restauration</option>
                    <option>Autre</option>
                </select>
                
                <label>Justificatif</label>
                <input type="file" accept=".pdf,.jpg,.png">
                
                <label>Commentaire</label>
                <textarea></textarea>
                
                <button type="submit">Soumettre</button>
            </form>
        </div>
    </body>
</html>