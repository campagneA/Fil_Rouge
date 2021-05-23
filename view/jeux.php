<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
include_once(__DIR__ . '/showFooter.php');

function afficheJeux()
{
?>
    <!doctype html>
    <html lang="en">
    <?php
    showHeader("../css/style.css");
    showNav();
    ?>

    <body>
        <div class="containr">

            <div class="items item1">
                <a class="location-title" href="ff10.php">FINAL FANTASY X</a>
                <div class="container-img">
                    <img src="..\photos en tt genre\tidusyuna.jpg" class="img1">
                </div>
            </div>

            <div class="items item2">
                <a class="location-title" href="#">FINAL FANTASY VII</a>
                <div class="container-img2">
                    <img src="../photos en tt genre/ff7.jpg" class="img2">
                </div>
            </div>

            <div class="items item3">
                <a class="location-title" href="#">FINAL FANTASY II</a>
                <div class="container-img3">
                    <img src="..\photos en tt genre\ff2.jpg" class="img3">
                </div>
            </div>

            <div class="items item4">
                <a class="location-title" href="#">FINAL FANTASY XII</a>
                <div class="container-img4">
                    <img src="..\photos en tt genre\ff12-2.jpg" class="img4">
                </div>
            </div>

            <div class="items item5">
                <a class="location-title" href="#">FINAL FANTASY I</a>
                <div class="container-img5">
                    <img src="..\photos en tt genre\ff1.jpg" class="img5">
                </div>
            </div>

            <div class="items item6">
                <a class="location-title" href="#">FINAL FANTASY XV</a>
                <div class="container-img6">
                    <img src="..\photos en tt genre\ff15.jpg" class="img6">
                </div>
            </div>

            <div class="items item7">
                <a class="location-title" href="#">FINAL FANTASY XIII</a>
                <div class="container-img7">
                    <img src="..\photos en tt genre\ff13.jpg" class="img7">
                </div>
            </div>

            <div class="items item8">
                <a class="location-title" href="#">FINAL FANTASY III</a>
                <div class="container-img8">
                    <img src="..\photos en tt genre\ff3.jpg" class="img8">
                </div>
            </div>

            <div class="items item9">
                <a class="location-title" href="#">FINAL FANTASY V</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff5-2.jpg" class="img5">
                </div>
            </div>

            <div class="items item10">
                <a class="location-title" href="#">FINAL FANTASY VI</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff6-2.jpg" class="img5">
                </div>
            </div>

            <div class="items item11">
                <a class="location-title" href="#">FINAL FANTASY IV</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff4.jpg" class="img5">
                </div>
            </div>

            <div class="items item12">
                <a class="location-title" href="#">FINAL FANTASY XVI</a>
                <div class="container-img12">
                    <img src="../photos en tt genre/ff16.jpg" class="img12">
                </div>
            </div>

            <div class="items item13">
                <a class="location-title" href="#">FINAL FANTASY VIII</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff8-2.jpg" class="img5">
                </div>
            </div>

            <div class="items item14">
                <a class="location-title" href="#">FINAL FANTASY IX</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff9-2.jpg" class="img5">
                </div>
            </div>

            <div class="items item15">
                <a class="location-title" href="#">FINAL FANTASY XI</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff11.jpg" class="img5">
                </div>
            </div>

            <div class="items item16">
                <a class="location-title" href="#">FINAL FANTASY XIV</a>
                <div class="container-img5">
                    <img src="../photos en tt genre/ff14.jpg" class="img5">
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