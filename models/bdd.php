<?php
// Charger l'autoloader de Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Charger les variables d'environnement depuis le fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Fonction pour obtenir la connexion à la base de données
function getDataBase() {
    static $pdo = null; // Empêche de recréer plusieurs connexions

    if ($pdo === null) {
        try {
            $pdo = new PDO(
                "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8",
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
    return $pdo;
}
?>
