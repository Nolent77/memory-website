<?php
function connectToDbAndGetPdo() {
    $host = 'localhost'; // Hôte de la base de données
    $dbname = 'memory'; // Remplacez par le nom de votre base de données
    $user = 'root'; // Nom d'utilisateur par défaut pour MAMP
    $password = 'root'; // Mot de passe par défaut pour MAMP

    // DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        // Création de l'instance PDO avec les bonnes variables
        $pdo = new PDO($dsn, $user, $password);

        // Option de configuration pour activer les exceptions d'erreurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        exit;
    }
}
$bd = connectToDbAndGetPdo();
?>
