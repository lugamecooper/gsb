<?php
    session_start();
    function header_element($acceuil = ".", $saisie_frais = ".", $consultation_frais = ".", $logoff = "..", ){
        $comptable = "";
        if ($_SESSION["idRole"] == 3){
            $comptable = "<li><a href=\"$logoff/src/logo-gsb.png\">Comptable</a></li>";
        }
        echo "
            <div class=\"header\">
                <h1>Intranet Visiteur Médical</h1>
            </div>
            <img alt=\"Logo\" src='https://t3.ftcdn.net/jpg/01/94/26/24/360_F_194262466_1TSWxJyR1SIKB8MEvExE8Beond075APw.jpg'>
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