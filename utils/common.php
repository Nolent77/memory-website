<?php
    require_once __DIR__. '/database.php';
    require_once __DIR__. '/userConnexion.php';
    require_once __DIR__. '/security.php';
    require_once __DIR__. '/validator.php';


    if (session_status() === PHP_SESSION_NONE) {
        session_start();
        if ($_SESSION['userId'] == null) {
            $_SESSION['userId'] = 0;
        }

}
?>
