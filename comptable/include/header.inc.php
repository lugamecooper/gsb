<?php
    session_start();
    function header_element($acceuil = ".", $suivi_paiment = ".", $validation_frais = ".", $logoff = "..", ){
        $visiteur = "";
        if ($_SESSION["idRole"] == 3){
            $visiteur = "<li><a href=\"https://gsb2.lucas-lestiennes.fr/visiteur/\">Visiteur</a></li>";
        }
        echo "
            <div class=\"header\">
                <h1>Intranet Comptable</h1>
            </div>

            <nav class=\"navbar\">
                <ul class=\"centered-links\">
                    <li><p>LOGO</p></li>
                    <br>
                    <li><a href=\"$acceuil/\">Acceuil</a></li>
                    <li><a href=\"$suivi_paiment/suivie-paiment\">Suivi des paiements</a></li>
                    <li><a href=\"$validation_frais/validation-frais\">Validation des fiches de frais</a></li>
                    <li><p>$_SESSION[nom] $_SESSION[prenom]</p></li>
                    $visiteur
                    <li class=\"bouton_logoff\"><a href=\"$logoff/logoff.php\">Déconnection</a></li>
                </ul>
            </nav>
            ";
    }
?>