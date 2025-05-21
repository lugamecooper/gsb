<?php
    session_start();
    function header_element($acceuil = ".", $saisie_frais = ".", $consultation_frais = ".", $logoff = "..", ){
        $comptable = "";
        if ($_SESSION["idRole"] == 3){
            $comptable = "<li><a href=\"https://gsb.lucas-lestiennes.fr/comptable/\">Comptable</a></li>";
        }
        echo "
            <div class=\"header\">
                <h1>Intranet Visiteur Médical</h1>
            </div>
            <img alt=\"Logo\" src=\"$logoff/src/logo-gsb.png\">
            <nav class=\"navbar\">
                <ul class=\"centered-links\">
                    <br>
                    <br>
                    <br>
                    <li><p id='name'>$_SESSION[nom] $_SESSION[prenom]</p></li>
                    <li><a href=\"$acceuil/\">Acceuil</a></li>
                    <li><a href=\"$saisie_frais/saisie-frais\">Saisi de frais</a></li>
                    <li><a href=\"$consultation_frais/consultation-frais\">Consultation fiche de frais</a></li>
                    $comptable
                    <li class=\"bouton_logoff\"><a href=\"$logoff/logoff.php\">Déconnection</a></li>
                </ul>
            </nav>
            ";
    }
?>