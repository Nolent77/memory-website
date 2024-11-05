<?php

    require "utils/common.php";

    $bd = connectToDbAndGetPdo();
    global $bd;

    function getUsername($bd, $userId) {
        $req = $bd->prepare("SELECT username FROM `user` WHERE id = ?");
        $req->execute(array($userId));
        $data = $req->fetch();

        return $data ? htmlspecialchars($data["username"]) : "Utilisateur";
    }


?>