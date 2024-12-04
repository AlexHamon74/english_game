<?php
session_start();

require_once "templates/header.php";
require_once "functions/db.php";

// Tentatice de connexion à la base de données
try {
    $pdo = getConnection();
} catch (PDOException) {
    die('Échec de la connexion à la base de données : ' . $e->getMessage());
}

// Récupère un sujet aléatoirement
$query = $pdo->prepare("SELECT * FROM sujet ORDER BY RAND() LIMIT 1");
$query->execute();
// Enregistre le sujet dans la session pour le calcul des points
$sujet = $query->fetch(PDO::FETCH_ASSOC);
if (!isset($_SESSION['sujet'])) {
    $_SESSION['sujet'] = $sujet;
}

// Récupère toutes les catégories
$query = $pdo->prepare("SELECT * FROM categorie");
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
// Initialisation des cartes par catégorie depuis la session
if (!isset($_SESSION['cartes_par_categorie'])) {
    $_SESSION['cartes_par_categorie'] = [];
}

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_carte = $_POST['numero'];
    $categorie_id = $_POST['categorie_id'];

    // Récupère la carte correspondante dans la base de données
    $query = $pdo->prepare("SELECT * FROM carte WHERE numero = :numero");
    $query->bindValue('numero', $numero_carte, PDO::PARAM_INT);
    $query->execute();
    $carte = $query->fetch(PDO::FETCH_ASSOC);

    // Enregistre la carte dans la session pour la catégorie correspondante
    if ($carte) {
        $_SESSION['cartes_par_categorie'][$categorie_id] = $carte;
    }
}

// Charge les cartes depuis la session
$cartes_par_categorie = $_SESSION['cartes_par_categorie'];

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>

<div class="container my-3">
    <div class="row">

        <div class="col-9">
            <div class="border">
                <h2>Bienvenue <?= $_POST['pseudo'] ? $_POST['pseudo'] : 'player1'; ?> </h2>

                <h5> <strong>Titre:</strong> <?= $sujet['titre']; ?> </h5>
                <p> <strong>Mission:</strong> <?= $sujet['mission']; ?> </p>
                <p> <strong>Description:</strong> <?= $sujet['description']; ?> </p>
            </div>
        </div>

        <div class="col-3">
            <div class="border">
                <h2>Players</h2>
                <p><?= $_POST['pseudo'] ? $_POST['pseudo'] : 'player1'; ?></p>
                <p>player2</p>
                <p>player3</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row justify-content-center">

        <?php foreach ($categories as $category) : ?>
            <div class="col-2">
                <div class="border">
                    <h3> <?= $category['name']; ?> </h3>
                </div>
                <form method="POST" action="">
                    <div class="input-group mb-3">
                        <input type="number" name="numero" class="form-control" required>
                        <input type="hidden" name="categorie_id" value="<?= $category['categorie_id']; ?>">
                        <button type="submit" class="btn btn-outline-primary">Rechercher</button>
                    </div>
                </form>
                <?php if (!empty($cartes_par_categorie[$category['categorie_id']])) : ?>
                    <p><?= htmlspecialchars($cartes_par_categorie[$category['categorie_id']]['nom']); ?></p>
                <?php else : ?>
                    <p>Aucune carte sélectionnée</p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    </div>

    <form method="POST" action="resultat.php">
        <input type="submit" class="btn btn-primary">
    </form>
</div>
