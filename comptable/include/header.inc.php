<?php
    session_start();
    function header_element($acceuil = ".", $suivi_paiment = ".", $validation_frais = ".", $logoff = "..", ){
        $visiteur = "";
        if ($_SESSION["idRole"] == 3){
            $visiteur = "<li><a href=\"https://gsb.lucas-lestiennes.fr/visiteur/\">Visiteur</a></li>";
        }
        echo "
            <div class=\"header\">
                <h1>Intranet Comptable</h1>
            </div>
            <img alt=\"Logo\" src=\"$logoff/src/logo-gsb.png\">
            <nav class=\"navbar\">
                <ul class=\"centered-links\">
                    <br>
                    <br>
                    <br>
                    <li><p id='name'>$_SESSION[nom] $_SESSION[prenom]</p></li>
                    <li><a href=\"$acceuil/\">Acceuil</a></li>
                    <li><a href=\"$suivi_paiment/suivie-paiment\">Suivi des paiements</a></li>
                    <li><a href=\"$validation_frais/validation-frais\">Validation des fiches de frais</a></li>
                    $visiteur
                    <li class=\"bouton_logoff\"><a href=\"$logoff/logoff.php\">Déconnection</a></li>
                </ul>
            </nav>
            ";
    }
?>