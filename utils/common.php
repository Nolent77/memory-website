<?php
    require_once __DIR__. '/database.php';
    require_once __DIR__. '/userConnexion.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
}


    $_SESSION['userId'] = '1';


?>
