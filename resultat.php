<?php
session_start();

require_once "templates/header.php";
?>

<h1>Resultat</h1>

<?php
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

<button></button>

<a href="index.php">Rejouer</a>