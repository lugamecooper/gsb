<?php 
    $_SESSION["idRole"] = NULL;
    $_SESSION["idUser"] = NULL;
    session_destroy();
    echo '<script>window.location.replace("https://gsb.lucas-lestiennes.fr/?erreur=vous avez été déconecter")</script>';
?>