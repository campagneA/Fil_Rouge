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
        <link rel="stylesheet" href="../fil_rouge.css">
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

function pageAccueil()
{
?>
    <div class="border_box">
        <div class="acceuil" id="acceuil">
            <div class="modal">
                <span class="closeBtn" id="closeBtn">&times;</span>
                <div class="modal_content">
                    <div id="player"></div>
                </div>
            </div>
            <div class="slider_container">
                <div class="slide active" style="background-image: url('../fonds_ecrans/acceuil_slider/main_pc.jpg');">

                </div>
                <div class="slide" style="background-image: url('../fonds_ecrans/acceuil_slider/saga-frontier-remastered-artwork-005.jpg');">
                </div>
                <div class="slide" style="background-image: url('../fonds_ecrans/acceuil_slider/neo-the-world-ends-with-you_2020-11-23_004.jpg');">
                </div>
                <div class="slide" style="background-image: url('../fonds_ecrans/acceuil_slider/1 (1).jpg');">
                </div>
                <div class="slide_text active_text " id="slide1_text">
                    <h1>NieR Replicant Ver. 1.22474487139...</h1>
                    <h2>Bientôt disponible</h2>
                    <button class="trailer" id="trailer1">Voir le trailer</button>
                    <button class="achat" onclick="window.location.href='boutique.php';">Precommander</button>
                </div>
                <div class="slide_text" id="slide2_text">
                    <h1>La Saga est de retour</h1>
                    <button class="trailer">trailer</button>
                    <button class="achat" onclick="window.location.href='boutique.php';">precommander</button>
                </div>
                <div class="slide_text " id="slide3_text">
                    <h1>Neo the world ends <br> with you</h1>
                    <h2> dès le 27 juillet 2021 sur Nintendo Switch et PlayStation</h2>
                    <button class="trailer">trailer</button>
                    <button class="achat" onclick="window.location.href='boutique.php';">precommander</button>
                </div>
                <div class="slide_text" id="slide4_text">
                    <h1>La Saga est de retour!</h1>
                    <button class="trailer">trailer</button>
                    <button class="achat" onclick="window.location.href='boutique.php';">precommander</button>
                </div>
                <div class="navigation">
                    <label for="" class="bar hovernow active_label" id="1"></label>
                    <label for="" class="bar hovernow" id="2"></label>
                    <label for="" class="bar hovernow" id="3"></label>
                    <label for="" class="bar hovernow" id="4"></label>
                </div>
            </div>
        </div>
        <div class="wrap_acc">
            <div class="nos_jeux">
                <h1>Nos franchises</h1>
                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Bravely.jpg" alt="Bravely">
                    <div class="acc_img_content">
                        <h3>Bravely</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Chaos.jpg" alt="Chaos">
                    <div class="acc_img_content">
                        <h3>Chaos</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Chrono.jpg" alt="Chrono">
                    <div class="acc_img_content">
                        <h3>Chrono</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/DeusEx.jpg" alt="DeusEx">
                    <div class="acc_img_content">
                        <h3>Deus Ex</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Dragon_quest.jpg" alt="Dragon_quest">
                    <div class="acc_img_content">
                        <h3>Dragon Quest</h3>
                    </div>

                </div>
                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/DrakenGard.jpg" alt="DrakenGard">
                    <div class="acc_img_content">
                        <h3>DrakenGard</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Final_fantasy.jpg" alt="Final_fantasy">
                    <div class="acc_img_content">
                        <h3>Final Fantasy</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Kingdom_hearts.jpg" alt="Kingdom_hearts">
                    <div class="acc_img_content">
                        <h3>Kingdom Hearts</h3>
                    </div>

                </div>
                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Legacy_of_kain.jpg" alt="Legacy_of_kain">
                    <div class="acc_img_content">
                        <h3>Legacy of Kain</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Life_is_strange.jpg" alt="Life_is_strange">
                    <div class="acc_img_content">
                        <h3>Life is Strange</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Mana.jpg" alt="Mana">
                    <div class="acc_img_content">
                        <h3>Mana</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Ogre.jpg" alt="Ogre">
                    <div class="acc_img_content">
                        <h3>Ogre</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Saga.jpg" alt="Saga">
                    <div class="acc_img_content">
                        <h3>Saga</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Space_invaders.png" alt="Space_invaders">
                    <div class="acc_img_content">
                        <h3>Space invaders</h3>
                    </div>
                </div>

                <div class="jeux_acc"><img src="../fonds_ecrans/franchises/Tomb_raider.jpg" alt="Tomb_raider">
                    <div class="acc_img_content">
                        <h3>Tomb Raider</h3>
                    </div>
                </div>
            </div>
            <div class="jeux_acc_links">
                <a href="jeux.php">

                    tout nos jeux
                </a>
                <a href="boutique.php">

                    Boutique
                </a>
            </div>
        </div>
    </div>
    <footer>
        <div class="logo_footer">
            <a href="acceuil.php"><img src="../Logo/SquareEnix_title.jpg" alt="logo_squareEnix" title="Home"></a>
        </div>
        <div class="footer_links">
            <div>
                <ul>
                    <li><a href="#">Carrières</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Assistance</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">À propos de nous</a></li>
                    <li><a href="#">Nous contacter</a></li>
                    <li><a href="#">Confidentialité</a></li>
                    <li><a href="#">Conditions d'utilisation</a></li>
                    <li><a href="#">Paramettrer les cookies</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Investisseurs</a></li>
                    <li><a href="#">Presse</a></li>
                    <li><a href="#">Plan du site</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>
    <script src="../acceuil.js"></script>
<?php
}

function pageInscription()
{
?>
    <form action="check_inscription.php" method="POST">
        <h1>INSCRIPTION</h1>
        <h2>Pseudo</h2>
        <input type="text" name="pseudo" placeholder="SquareEnix" class="center" autofocus>
        <div>
            <h5 class="left">Nom :</h5>
            <input type="text" name="nom" placeholder="Nom">
            <h5 class="left">Prenom :</h5>
            <input type="text" name="prenom" placeholder="Prénom">
        </div>
        <div>
            <h5>Adresse Mail :</h5>
            <input type="mail" name="mail" placeholder="exemple@exemple.com">
            <h5>Confirmer Mail :</h5>
            <input type="mail" name="mailConf" placeholder="exemple@exemple.com">
        </div>
        <div>
            <h5>Mot de passe :</h5>
            <input type="password" name="passWord" placeholder="*******">
            <h5>Confirmer :</h5>
            <input type="password" name="passWordConf" placeholder="*******">
        </div>
        <ul class="position-button-inscription">
            <li><a href="check_inscription.php" type="button">Inscription</a></li>
        </ul>
        <div class="position">
            <a href="profil.php" type="button">
                <h6>Vous avez un compte? <br /> Connecte toi ICI !!!</h6>
            </a>
        </div>
    </form>
<?php
}

function pageConnexion()
{
?>
    <form action="#" method="POST">
        <h1>Connectez-vous</h1>
        <h2>Compte Mail</h2>
        <input type="text" name="userMail" placeholder="abc@example.com" autofocus>
        <h2>Mot de Passe</h2>
        <input type="password" name="passWord" placeholder="*******">
        <button type="submit">Connection</button>
        <div class="button-compte">
            <a href="#" type="button">
                <h3>Mot de Passe oublié? Par ICI !!!</h3>
            </a>
            <a href="Inscription.php" type="button">
                <h3>Pas de Compte? Par ICI !!!</h3>
            </a>
        </div>
    </form>
<?php
}

function pageHistoire()
{
?>
    <div class="mainBlock">
        <!-- <div class="title">L'HISTOIRE DE SQUARE</div> -->
        <!-- <div class="divider"></div> -->
        <div class="history-block topblock">
            <div class="history-pic-top">
                <img src="../photos en tt genre/square_20enix_20edition_20livres_20etats_20unis-88d77256-7b83-4863-bc67-5c77d3560718.jpg" alt="image histoire">
            </div>
            <div class="history-text floatright">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s<br>, when an unknown printer took a galley of type and scrambled
                it to make a type specimen book. It has survived not only five centuries,
                but also the leap into<br> electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,<br>
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s<br>, when an unknown printer took a galley of type and scrambled
                it to make a type specimen book. It has survived not only five centuries

            </div>


            <div class="clear"></div>
        </div>


        <div class="history-block">
            <div class="history-pic-mid">
                <img src="../photos en tt genre/565191-amano-yoshitaka-bartz-klauser-faris-scherwiz-final-fantasy-final-fantasy-v-lenna-charlotte-tycoon-sword-748x1030.jpg" alt="image histoire">
            </div>

            <div class="history-text floatright">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s<br>, when an unknown printer took a galley of type and scrambled
                it to make a type specimen book. It has survived not only five centuries,
                but also the leap into<br> electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,<br>
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s<br>, when an unknown printer took a galley of type and scrambled
                it to make a type specimen book. It has survived not only five centuries,


            </div>
            <div class="clear"></div>
        </div>



        <div class="history-block">
            <div class="history-pic-low floatleft">
                <img src="../photos en tt genre/final_fantasy_x_spira_90.jpg" alt="image histoire">
            </div>

            <div class="history-text floatright">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s<br>, when an unknown printer took a galley of type and scrambled
                it to make a type specimen book. It has survived not only five centuries,
                but also the leap into<br> electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,<br>
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy


            </div>

            <div class="clear"></div>
        </div>

    </div>
<?php
}
?>