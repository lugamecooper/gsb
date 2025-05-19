<?php
    function close($connexion,$idUser = NULL){
        $month = date('n');
        $day = date("Y-m-d");
        if ($idUser){
            try{
                $res = $connexion -> query("SELECT * FROM FicheFrais WHERE IdEtat = 1 AND Mois != $month AND IdVisiteur = $idUser;") -> fetchAll();
            }catch(PDOException $e){
                $res = FALSE;
            }
        }
        else{
            $res = $connexion -> query("SELECT * FROM FicheFrais WHERE IdEtat = 1 AND Mois != $month;") -> fetchAll();
        }
        if ($res != FALSE){
            foreach ($res as $x) {
                $connexion -> exec("UPDATE FicheFrais SET IdEtat = 2 WHERE IdVisiteur = $x[IdVisiteur] AND $x[Mois] != $month");
            }
        }
        else{
            if(!$connexion -> query("SELECT * FROM FicheFrais WHERE Mois = $month AND IdVisiteur = $_SESSION[idUser]") -> fetch())
                $connexion -> exec("INSERT INTO FicheFrais(IdVisiteur, Mois, nbJustificatifs, dateModif, montantValide, IdEtat) VALUES('$_SESSION[idUser]', '$month', 0, '$day', 0, 1)");
        }
    }
?>