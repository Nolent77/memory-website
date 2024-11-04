<!doctype html>
<html class="no-js" lang="fr">

<?php
    session_start();
    require 'utils/database.php';
    $pdo = connectToDbAndGetPdo();


    $css_file = 'register.css';
    include 'partials/head.php';
?>

<body>
    <?php include 'partials/header.php'; ?>

    <div class="header_image_container">
        <img src="assets/images/header.png" alt="paysage" class="header_image">
        <div class="overlay-text">Connexion</div>
    </div>

    <main class="register">

        <div class="registerBox">
            <input placeholder="Email">
            <input placeholder="Mot de passe">
            <button class ="registerBtn"> Connexion </button>
        </div>


    </main>


    <?php include 'partials/footer.php'; ?>
</body>

</html>