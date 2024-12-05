<?php
session_start();
require_once "templates/nav.php";
require_once "functions/db.php";

// Tentatice de connexion à la base de données
try {
    $pdo = getConnection();
} catch (PDOException $e) {
    die('Échec de la connexion à la base de données : ' . $e->getMessage());
}

// Récupère un sujet aléatoirement
$query = $pdo->prepare("SELECT * FROM sujet ORDER BY RAND() LIMIT 1");
$query->execute();
$sujet = $query->fetch(PDO::FETCH_ASSOC);
// Enregistre le sujet dans la session pour le calcul des points
if (!isset($_SESSION['sujet'])) {
    $_SESSION['sujet'] = $sujet;
}
?>

<div class="position-absolute top-50 start-50 translate-middle">
    <form action="game.php" method="POST">
        <div class="mb-3">
            <h3><label for="pseudo" class="label-custom mb-4">Enter your name:</label></h3>
            <input type="text" class="form-control bg-secondary text-light text-center" id="pseudo" name="pseudo" required>
        </div>
        <input class="button1 mx-auto d-flex" type="submit">
    </form>
</div>
