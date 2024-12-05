<?php
// Ouvre la session pour récupérer toutes les données
session_start();

require_once "templates/nav.php";
require_once "functions/db.php";

// Initialization du numero du sujet
$numero_sujet = $_SESSION['sujet']['sujet_numero'];

// Boucle sur chaque carte
// Puis calcul le nombre de points
foreach ($_SESSION['cartes_par_categorie'] as $points) {
    switch ($numero_sujet) {
        case 1:
            $total += $points['sujet1_points'];
            break;
        case 2:
            $total += $points['sujet2_points'];
            break;
        case 3:
            $total += $points['sujet3_points'];
            break;
        case 4:
            $total += $points['sujet4_points'];
            break;
        case 5:
            $total += $points['sujet5_points'];
            break;
    }
}

$classement = "";
if($total < 10 ) {
    $classement = 'Bronze';
    $my_rank = "Not bad at all, " .  $_SESSION['pseudo'] . "! With " .  $total . " points, you get the Bronze rank. 💪 Keep improving your style and climb to the top! 🚀";
} elseif($total >= 10 && $total <= 20) {
    $classement = 'Silver';
    $my_rank = "Well done, " .  $_SESSION['pseudo'] . "! Your score of " . $total . " points ranks you in the Silver rank. 🌟 You are on track to become a master of web design. Keep the course! 🙌";
} else {
    $classement = 'Gold';
    $my_rank ="Amazing, " . $_SESSION['pseudo'] . "! With " . $total . " points you reach the Gold rank 🏆, the top of the ranking. ✨ You are a real star of web design. Keep inspiring with your talent! 👏";
}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="statistics-container pt-3">
                <div class="px-4">
                    <h4>Statistics</h4>
                    <p>Discover which Agents perform best with win rates, pick rates, average scores, and other helpful statistics.</p>
                </div>
                    <div class="bg-green px-4 d-flex justify-content-evenly align-items-center">
                        <p class="m-0 py-2 text-light">Name</p>
                        <p class="m-0 py-2 text-light">Points</p>
                        <p class="m-0 py-2 text-light">Catégorie</p>
                    </div>
                    <div class="px-4 d-flex justify-content-evenly align-items-center">
                        <p class="m-0 py-2 p-2"><?= $_SESSION['pseudo'] ?></p>
                        <p class="m-0 py-2"><?= $total ?></p>
                        <p class="m-0 py-2"><?= $classement ?></p>
                    </div>
                <div class="px-4 border-top border-secondary mb-5">
                    <h4>My rank</h4>
                    <p><?= $my_rank ?></p>
                </div>
                <button class="button2 w-100">View Statistics</button>
            </div>
        </div>



        <div class="col-lg-6 col-12">
            <h1>Ranking</h2>
            <div class="row mt-4 text-center align-items-center">

                <div class="col-4">
                    <div class="py-5 bg-violet text-light rounded-3">
                        <h4>#One</h4>
                        <h5 class="py-2"><?= $_SESSION['pseudo'] ?></h5>
                        <p class="text-light">Points <br> <?= $total ?></p>
                    </div>                    
                </div>
                <div class="col-4">
                    <div class="py-4 bg-dark text-light rounded-3">
                        <h4>#Two</h4>
                        <h5 class="py-2">Cloé</h5>
                        <p class="text-light">Points <br> 0</p>
                    </div>                    
                </div>
                <div class="col-4">
                    <div class="py-3 bg-dark text-light rounded-3">
                        <h4>#Three</h4>
                        <h5 class="py-2">Baptiste</h5>
                        <p class="text-light">Points <br> 0</p>
                    </div>                    
                </div>
            </div>
        </div>
        
        <div class="text-center my-4">
            <a class="button1 px-5" href="index.php">Rejouer</a>
        </div>

    </div>
</div>
<?php require_once 'templates/footer.php'; ?>
