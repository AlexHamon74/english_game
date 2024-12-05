<?php
session_start();

if (count($_SESSION['cartes_par_categorie']) !== 5) {
    $_SESSION['error_message'] = "Vous devez sélectionner exactement 5 cartes avant de continuer.";
    header('Location: game.php');
} else {
    header('Location: resultat.php');
}