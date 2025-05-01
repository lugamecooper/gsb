<?php
    session_start();
    function header_element($acceuil = "./", $saisie_frais = "./", $consultation_frais = "./", $logoff = "../", ){
        echo "
            <div class=\"header\">
                <h1>Intranet visiteurs médicaux</h1>
            </div>

            <nav class=\"navbar\">
                <ul class=\"centered-links\">
                    <li><a href=\"./\">Acceuil</a></li>
                    <li><a href=\"./saisie-frais\">Saisi de frais</a></li>
                    <li><a href=\"./consultation-frais\">Consultation fiche de frais</a></li>
                </ul>
                <ul class=\"right-aligned\">
                    <li><p>LOGO</p></li>
                    <li><p>$_SESSION[nom] $_SESSION[prenom]</p></li>
                    <li class=\"bouton_logoff\"><a href=\"../logoff.php\">Déconnection</a></li>
                </ul>
            </nav>
            ";
    }
?>