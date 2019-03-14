<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/Epoka-Missions/index.php');
    exit();
?>