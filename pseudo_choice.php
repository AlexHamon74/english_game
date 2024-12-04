<?php
    require_once "templates/header.php";
?>

<div class="position-absolute top-50 start-50 translate-middle">
    <form action="game.php" method="POST">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Entrez votre pseudo :</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo">
        </div>
        <input class="btn btn-sm btn-primary" type="submit">
    </form>
</div>