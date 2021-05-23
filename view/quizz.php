<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
include_once(__DIR__ . '/showFooter.php');
function choixQuizz()
{
?>
    <!doctype html>
    <html lang="en">
    <?php
    showHeader("../css/quizz.css");
    showNav();
    ?>

    <body>
        <div class="titren4"> Choisis ton quizz ! </div>

        <div class="containeure">

            <div class="blockn4 block1n4">
                <div class="boxn4">
                    <div>
                        <a href="quizzFacile.php"> Facile </a>
                    </div>
                </div>
            </div>

            <div class="blockn4 block2n4">
                <div class="boxn4">
                    <div> Moyen </div>
                </div>
            </div>

            <div class="blockn4 block3n4">
                <div class="boxn4">
                    <div> Difficile </div>
                </div>
            </div>
        </div>
        <?php
        showFooter()
        ?>
    </body>

    </html>
<?php
}
?>