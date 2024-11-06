
<?php
    require_once __DIR__. "/common.php";
    $db = connectToDbAndGetPdo();
    global $db;

function emailVerif($email) {
    global $db;
    $req = $db->prepare('SELECT email FROM `user` WHERE email = ?');
    $req->execute([$email]);

    if ($req->fetch() != null) {
        echo "l'adresse mail est déjà utilisé";
        return false;
    }
    return true;
}


function pseudoVerif($pseudo) {
    global $db;
    if (strlen($pseudo) < 4) {
        echo "pseudo invalide, votre pseudo doit avoir minimum 4 chiffres";
        return false;
    }
    $req = $db->prepare('SELECT username FROM `user` WHERE username = ?');
    $req->execute([$pseudo]);

    if ($req->fetch() != null) {
        echo "pseudo déjà existant";
        return false;
    }
    return true;
}


function registerPasswordVerif($password, $confirm_password) {
    if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[\W]/', $password)) {
        echo "Le mot de passe doit comporter au minimum 8 caractères, 1 majuscule et 1 caractère spécial.";
        return false;
    }
    if ($password !== $confirm_password) {
        echo "Les mots de passe ne sont pas identiques";
        return false;
    }
    return true;


    $req = $db->prepare('INSERT INTO `user`(password) VALUES(?)');
    if ($req->execute([$password])) {
        echo "l'inscription a réussi";
    } else {
        echo "l'inscritpion a échoué";
    }
}



if (isset($_POST['submitInscription'])) {
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (pseudoVerif($pseudo) && emailVerif($email) && registerPasswordVerif($password, $confirm_password)) {


        $hashed_mdp = password_hash($password, PASSWORD_DEFAULT);

        $req = $db->prepare('INSERT INTO `user` (username, email, password,registration_date,last_login) VALUES (?, ?, ?, NOW(), NOW())');
        $req->execute([$pseudo, $email, $hashed_mdp]);

        $lastInsertId = $db->lastInsertId();
        $_SESSION['userId'] = $lastInsertId;

        echo "Inscription réussie !";
        header("Location: ../index.php");
    }
}
?>