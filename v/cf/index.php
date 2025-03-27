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

        <ul  class="nav-bar">
            <li><a href="../">Acceuil</a></li>
            <li><a href="../sf">Saisi de frais</a></li>
            <li><a href="./">Consultation fiche de frais</a></li>
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

            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname"
                            placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname"
                            placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject"
                            placeholder="Write something.."
                            style="height:200px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>

        </div>
    </body>
</html>