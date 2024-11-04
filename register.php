<!doctype html>
<html class="no-js" lang="fr">

<?php
    $css_file = 'register.css';
    include 'partials/head.php';
?>

<body>
    <?php include 'partials/header.php'; ?>


    <div class="header_image_container">
        <img src="assets/images/header.png" alt="paysage" class="header_image">
        <div class="overlay-text">Inscription</div>
    </div>

    <main>

        <div class="registerBox">
                <input placeholder="Email">
                <input placeholder="Pseudo">
                <input placeholder="Mot de passe">
                <input placeholder="Confirmer Mot de passe">
                <button class ="registerBtn"> Inscription </button>
        </div>

        </main>

    <?php include 'partials/footer.php'; ?>
</body>
</html>