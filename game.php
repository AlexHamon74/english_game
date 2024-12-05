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

// Récupère toutes les catégories
$query = $pdo->prepare("SELECT * FROM categorie");
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
// Initialisation un tableau de cartes par catégorie dans la session
if (!isset($_SESSION['cartes_par_categorie'])) {
    $_SESSION['cartes_par_categorie'] = [];
}

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_carte = $_POST['numero'];
    $categorie_id = $_POST['categorie_id'];

    // Récupère la carte correspondante dans la base de données
    $query = $pdo->prepare("SELECT * FROM carte WHERE carte_numero = :numero");
    $query->bindValue(':numero', $numero_carte, PDO::PARAM_INT);
    $query->execute();
    $carte = $query->fetch(PDO::FETCH_ASSOC);

    // Enregistre la carte dans la session pour la catégorie correspondante
    if ($carte) {
        $_SESSION['cartes_par_categorie'][$categorie_id] = $carte;
    }

    // Récupération du pseudo
    if (!isset($_SESSION['pseudo'])) {
        $_SESSION['pseudo'] = $_POST['pseudo'];
    }
}

// Charge les cartes depuis la session
$cartes_par_categorie = $_SESSION['cartes_par_categorie'];
?>

<!-- Message d'erreur -->
<div class="container my-3">
    <?php if(isset($_SESSION['error_message'])) : ?>
        <p class="alert alert-danger"><?= $_SESSION['error_message'] ?></p>
    <?php endif; ?>
</div>


<!-- Partie top : sujet, players -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-4 col-12">
            <div>
                <h1>Bienvenue <?= $_SESSION['pseudo'] ?> </h1>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="border">
                <img src="<?= $_SESSION['sujet']['image'] ?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div>
                <h2>Players</h2>
                <ul>
                    <li><strong><?= $_SESSION['pseudo']; ?></strong></li>
                    <li>Baptiste</li>
                    <li>Cloé</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Partie bottom : cartes -->
<div class="container mt-5">
    <div class="row justify-content-center">
    <h2 id="our_deck">Votre deck</h2>
    <p>Ajouter vos cartes UNE par UNE</p>
        <?php foreach ($categories as $category) : ?>
            <div class="col">
                <div class="border bg-grey text-light text-center shadow rounded-1 py-4">
                    <img class="picto" src="<?= $category['image']; ?>" alt="">
                    <h6><?= $category['nom']; ?></h6>

                    <!-- Formulaire pour ajouter une carte -->
                    <form action="#our_deck" method="POST">
                        <div class="mx-3 mb-3">
                            <input type="hidden" name="categorie_id" placeholder="Id" value="<?= $category['categorie_id']; ?>">
                            <input type="number" name="numero" class="form-control form-control-sm" placeholder="Entrez un numéro :" required>
                        </div>
                        <button type="submit" class="button1">Go</button>
                    </form>

                </div>
                <?php if (empty($cartes_par_categorie[$category['categorie_id']])) : ?>
                    <p></p>
                <?php elseif ($cartes_par_categorie[$category['categorie_id']]['categorie_id'] !== $category['categorie_id']) : ?>
                    <p>Cette carte n'apparait pas dans cette catégorie</p>
                <?php else : ?>
                    <img class="img-fluid" src="<?= $cartes_par_categorie[$category['categorie_id']]['image'];?>">
                <?php endif; ?>

            </div>
        <?php endforeach; ?>
    </div>
    <div class="text-center my-4">
        <form action="game_process.php" method="POST">
            <button type="submit" class="button2 mx-5">Validate my deck</button>
        </form>
    </div>
</div>
<?php require_once 'templates/footer.php'; ?>

