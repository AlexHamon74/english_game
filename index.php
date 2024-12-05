<?php
    session_start();
    session_destroy();
    require_once "templates/nav.php";
?>


<!-- Section top -->
<section class="mt-5" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <h1>Brand Game</h1>
                <p> Become a design master by creating graphic charters based on design principles. Colors, typography, textures, logos and illustrations. <br>
                    You'll become a real master! 
                </p>
                <a href="pseudo_choice.php" class="button1">Start</a>
            </div>
            <div class="col-lg-7 col-12">
                <img src="assets/img/mix.PNG" alt="brief" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<!-- Section Cartes -->
<section class="mt-5" id="card">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="mb-4">Card categories</h2>
            <div class="col-lg-3 col-6">
                <div class="mb-4">
                    <img src="assets/img/d.png" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="mb-4">
                    <img src="assets/img/a.png" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="mb-4">
                    <img src="assets/img/b.png" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="mb-4">
                    <img src="assets/img/c.png" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="mb-4">
                    <img src="assets/img/e.png" class="img-fluid">
                </div>
            </div>
            <div class="col-12">
                <h3>Description</h3>
                <p>There are four categories of cards. Each card has an identifier, a title, <br>
                an icon, a photo, a description, and most importantly points!</p>
            </div>
        </div>
    </div>
</section>


<!-- Section Regles -->
<section class="mt-5" id="rules">
    <div class="container">
        <div class="row">
            <h2>Rules</h2>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-yellow p-4" style="height: 560px;">
                    <h3>Gameplay: How to Play</h3>
                    <p class="text-light">1. Shuffle all the cards thoroughly and deal 5 cards to each player. <br>
                    2. Place the remaining cards in the center to form a face-down draw pile. <br>
                    3. Read the client brief aloud (e.g., "Create a brand identity for a cozy and authentic pizzeria"). <br>
                    4. Each player receives a game board or a designated space with 5 slots, one for each card category, to build their deck</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-violet p-4" style="height: 560px;">
                    <h3>Turn Sequence</h3>
                    <p class="text-light">On each turn, players draw a card from the draw pile, exchange a card from their hand with a card from the discard pile, or place a card on their deck. Once a card is placed, it can only be removed by exchanging it with another card of the same category.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-orange p-4" style="height: 560px;">
                    <h3>End of the round</h3>
                    <p class="text-light">The round ends when all players have completed their deck. The order in which the players finish is noted.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-violet-clair p-4" style="height: 560px;">
                    <h3>Deck Evaluation</h3>
                    <p class="text-light">Each deck is evaluated based on its consistency with the client brief, and a number of points is awarded for each card that makes up the graphic charter.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Section Deck -->
<section class="mt-5" id="deck">
    <div class="container">
        <h2>Deck</h2>
        <h3>Description</h3>
        <div class="row">
            <div class="col-lg-6 col-12">
                <p>The board consists of a desk with 5 zones according <br>
                to the type of card, allowing you to place your cards.</p>
            </div>
            <div class="col-lg-6 col-12">
                <p>There are two zones for drawing and discarding cards.</p>
            </div>
        </div>

        <div class="col-6 d-flex mx-auto my-4">
                <img src="assets/img/plateau.PNG" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <p>In the middle of the board is a brief that players use <br>
                as a basis for developing their graphic charter.</p>
            </div>
            <div class="col-lg-6 col-12">
                <p>At the end of the game, players place their cards into <br>
                the app based on their deck to see their points and find out <br>
                how skilled they are in the art of design!</p>
            </div>
        </div>
    </div>
</section>
    

<!-- Section a propos -->
<section class="mt-5" id="about">
    <div class="container">
        <div class="row">
            <h2>About us</h2>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-violet-clair mb-4 rounded-4 p-4" style="height: 200px;">
                    <img src="" alt="photo_hans">
                    <h3>Hans HYBANI PRINCIA</h3>
                    <p class="text-light">
                        Webdesign
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-violet-clair mb-4 rounded-4 p-4" style="height: 200px;">
                    <img src="" alt="photo_baptiste">
                    <h3>Baptiste OGER</h3>
                    <p class="text-light">
                        Digital Création
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-yellow mb-4 rounded-4 p-4" style="height: 200px;">
                    <img src="" alt="photo_alex">
                    <h3>Alex HAMON</h3>
                    <p class="text-light">
                        Developer
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="bg-orange mb-4 rounded-4 p-4" style="height: 200px;">
                    <img src="" alt="phot_cloé">
                    <h3>Cloé COQUART</h3>
                    <p class="text-light">
                        Marketing Digital
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section newsletter -->
<section class="mt-5 bg-green">
    <div class="container">
        <div class="row align-items-center py-4">

            <div class="col-lg-6 col-12">
                <h2 class="text-light">Saty in the loop</h2>
                <p class="text-light">Subscribe to receive the latest news and updates about TDA. <br>
                We promise not to spam you! </p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="d-flex">
                    <input type="email" placeholder="Enter your email" class="form-control">
                    <button type="button" class="button1">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php require_once 'templates/footer.php'; ?>
</body>
</html>