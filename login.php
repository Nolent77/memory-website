<!doctype html>
<html class="no-js" lang="fr">

<?php
require_once __DIR__. '/utils/userConnexion.php';
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
        <form method = "post" action="utils/userConnexion.php">
            <input name = 'email_login' placeholder="Email">
            <input name = 'password_login' placeholder="Mot de passe">
            <button name = 'submitConnexion' class ="registerBtn" type="submit"> Connexion </button>
        </form>
    </div>


</main>


<?php include 'partials/footer.php'; ?>
</body>

</html>