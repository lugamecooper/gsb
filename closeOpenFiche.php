<?php 
    function close($idUser = NULL){
        $month = date('n');
            if ($idUser){
                $res = $connexion -> query("SELECT * FROM FicheFrais WHERE IdEtat = 1 AND Mois != $month AND IdVisiteur = $idUser;") -> fetchAll();
            }
            else{
                $res = $connexion -> query("SELECT * FROM FicheFrais WHERE IdEtat = 1 AND Mois != $month;") -> fetchAll();
            }
            if ($res != FALSE){
                foreach ($res as $x) {
                    $connexion -> exec("UPDATE FicheFrais SET IdEtat = 2 WHERE IdVisiteur = $x[IdVisiteur] AND $x[Mois] != $month");
                }
            }
    }
?>