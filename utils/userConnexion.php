<?php

    require __DIR__. "/common.php";

    $bd = connectToDbAndGetPdo();
    global $bd;

    function getUsername($bd, $userId) {
        $req = $bd->prepare("SELECT username FROM `user` WHERE id = ?");
        $req->execute(array($_SESSION['userId']));
        $data = $req->fetch();

        return $data ? htmlspecialchars($data["username"]) : "Utilisateur";
    }


?>