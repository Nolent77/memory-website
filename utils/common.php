<?php
    require_once 'utils/database.php';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
}


    $_SESSION['userId'] = '1';


?>
