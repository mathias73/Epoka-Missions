<?php
// On démarre la session
    session_start();
// On detruit les sessions :
    session_destroy();
// On redirige le visiteur vers la page désirée :
    header('Location: http://localhost/epoka/index.php');
    exit();
?>