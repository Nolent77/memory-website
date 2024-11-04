<!DOCTYPE html>
<html lang="fr">

<?php
    $css_file = 'contact.css';
    include 'partials/head.php';
?>

<?php
    require_once 'utils/database.php';

try {
    $pdo = connectToDbAndGetPdo();

    // Remplacez 'user' par le nom de votre table si nécessaire
    $tableName = 'user';

    // Requête pour vérifier si la table existe
    $query = $pdo->query("SHOW TABLES LIKE '$tableName'");
    $exists = $query->rowCount() > 0;

    if ($exists) {
        echo "La table '$tableName' existe.";
    } else {
        echo "La table '$tableName' n'existe pas.";
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>




<body>
    <?php include 'partials/header.php'; ?>
    <div class="header_image_container"><img src="../../assets/images/header.png" alt="paysage" class="header_image">
    <div class="overlay-text">Tableau des Scores</div></div>


    <main>

        <div class="list">
            <div class="black_square">
                <img src="assets/images/phone-solid%20(2).svg" alt="phone">
                <span>06 05 56 75 44</span>
            </div>

            <div class="black_square">
                <img src="assets/images/envelope-solid%20(3).svg" alt="email">
                <span>support@powerofmemory.fr</span>
            </div>
            <div class="black_square">
                <img src="assets/images/location-dot-solid%20(2).svg" alt="map marker">
                <span>Cergy</span>
            </div>
        </div>

        <div class="contact_box">
            <div class="list2">
                <input class="input" placeholder="Nom"></input>
                <input class="input" placeholder="Email"></input>
            </div>
            <input class="input" placeholder="Sujet"></input>
            <textarea class="input_message" placeholder="Message"></textarea>
            <button>Envoyer</button>
        </div>



    </main>




    <?php include 'partials/footer.php'; ?>
</body>

</html>