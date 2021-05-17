<?php
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
