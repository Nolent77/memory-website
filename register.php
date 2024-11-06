<!doctype html>
<html class="no-js" lang="fr">

<?php
    require_once __DIR__. "/utils/common.php";

    $css_file = 'register.css';
    include 'partials/head.php';

    $db = connectToDbAndGetPdo();
    global $db;

?>


<body>
<?php include 'partials/header.php'; ?>
<div class="header_image_container">
    <img src="assets/images/header.png" alt="paysage" class="header_image">
    <div class="overlay-text">Inscription</div>
</div>

<main>
    <div class="registerBox">
        <form method = "POST" action="utils/security.php">
            <input name="email" placeholder="Email" type="email">
            <input name="pseudo" placeholder="Pseudo" type="text">
            <input name="password" placeholder="Mot de passe" type="password">
            <input name = "confirm_password" placeholder="Confirm le mot de passe" type="password">
            <button name = 'submitInscription' value ="Inscription" type="submit"> Inscription </button>

        </form>
    </div>
</main>

<?php include 'partials/footer.php'; ?>
</body>
</html>