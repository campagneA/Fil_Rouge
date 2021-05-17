<?php

function header()
{
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/fil_rouge.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <script src="../main.js"></script>
        <title>Square Enix France</title>
    </head>
<?php
}

function barNavigation()
{
?>
    <header>
        <div class="header_navbar" id="header_navbar">
            <div class="logo">
                <a href="acceuil.php">
                    <img src="../Logo/SquareEnix_title.jpg" alt="logo_squareEnix" title="Home">
                </a>
            </div>
            <nav class="nav_gauche">
                <ul>
                    <li><a href="jeux.php">Jeux</a></li>
                    <li><a href="histoire.php">histoire</a></li>
                    <li><a href="forum.php">forum</a></li>
                    <li><a href="quizz.php">quizz</a></li>
                    <li><a href="boutique.php">boutique</a></li>
                </ul>
            </nav>
            <nav class="nav_droite">
                <ul>
                    <li><a href="research.php"><img src="../logo/Search.jpg" alt="Search" title="Rechercher"></a></li>
                    <li><a href="profil.php"><img src="../logo/Member.gif" alt="Profil" title="Profil"></a></li>
                    <li><a href="panier.php"><img src="../logo/Boutique.jpg" alt="Profil" title="Panier"></a></li>

                </ul>
                </a>

            </nav>
            <div class="btn_toggle_nav" onclick="toggleNav()"></div>
            <nav class="nav_sidebar">
                <ul>
                    <li><a href="jeux.php">Jeux</a></li>
                    <li><a href="histoire.php">histoire</a></li>
                    <li><a href="forum.php">forum</a></li>
                    <li><a href="quizz.php">quizz</a></li>
                    <li><a href="boutique.php">boutique</a></li>
                    <br>
                    <li><input type="text" placeholder="Rechercher"></li>
                    <li><a href="profil.php">profil</a></li>
                    <li><a href="panier.php">panier</a></li>
                </ul>
            </nav>
        </div>
    </header>
<?php
}
?>