<?php

    require __DIR__. "/common.php";

    $db = connectToDbAndGetPdo();
    global $db;
    $_SESSION['error'] = false;


    function getUsername($bd) {
        $req = $bd->prepare("SELECT username FROM `user` WHERE id = ?");
        $req->execute(array($_SESSION['userId']));
        $data = $req->fetch();

        return $data ? htmlspecialchars($data["username"]) : "Utilisateur";
    }



function identifiantVerif($email, $password, $db) {
    $req = $db->prepare('SELECT id, password FROM `user` WHERE email = ?');
    $req->execute([$email]);
    $user = $req->fetch();

    if($user&&password_verify($password,$user['password'])){
        $_SESSION['userId'] = $user['id'];
        return $_SESSION['userId'];
    }
    return false;
}


if (isset($_POST['submitConnexion'])) {
    $email = $_POST['email_login'];
    $password = $_POST['password_login'];

    $idValid = identifiantVerif($email, $password, $db);

    if($idValid != false){
        $req = $db->prepare('UPDATE `user` SET last_login = NOW() WHERE email = ?');
        $req->execute([$email]);
        header("Location: ../index.php");
    }
    else{
        $_SESSION['error'] = true;
        header("Location: ../login.php");
    }
}
?>
