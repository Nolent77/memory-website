<!DOCTYPE html>
<html lang="fr">

<?php
    $css_file = 'myAccount.css';
    include 'partials/head.php';


    isConnect();
?>

<body>
<?php
    include 'partials/header.php';

    $userId = 1;
    $target_dir = "userfiles/";
    $target_file = $target_dir . $userId . '.jpg';
    $uploadOk = 1;
    if(isset($_POST["submit"])) {
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

?>

<form action="myAccount.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


<div class="header_image_container">
    <img src="assets/images/header.png" alt="paysage" class="header_image">
    <div class="overlay-text">Mon Espace</div>
</div>

<main>
    <div class="userAccount">
        <div class="infoPlayerBox">
            <div class ="backOfProfilPic">
                <img src="<?php echo $target_dir .  $userId . '.jpg' ?>"
            </div>
            <div class ="backOfInfoPlayer">
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