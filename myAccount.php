<!DOCTYPE html>
<html lang="fr">

<?php
    $css_file = 'myAccount.css';
    include 'partials/head.php';
?>

<body>
    <?php include 'partials/header.php'; ?>

<div class="header_image_container">
    <img src="assets/images/header.png" alt="paysage" class="header_image">
    <div class="overlay-text">Mon Espace</div>
</div>

  <main>
      <div class="userAccount">
          <div class="infoPlayerBox">
              <div classe="backOfProfilPic">
              <figure>
                  <img src="assets/images/user-solid.svg">
              </figure>
              </div>
              <div classe="backOfInfoPlayer">
              <p>Nom du Joueur</p>
              <p>Pseudo</p>
              </div>
          </div>
          <div class="actionBtn">
              <a href="change_email.php" class="buttonMail">Changer Mon Adresse Mail</a>
              <a href="change_password.php" class = "buttonMotDePasse">Changer Mon Mot De Passe</a>
          </div>
      </div>
  </main>


    <?php include 'partials/footer.php'; ?>
</body>
</html>