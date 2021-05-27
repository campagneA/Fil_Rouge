<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
include_once(__DIR__ . '/showFooter.php');
function afficheQuizz()
{
?>
    <!doctype html>
    <html lang="en">
    <?php
    showHeader("../css/quizzFacile.css");
    showNav();
    ?>

    <body>
        <div class="container-global">
            <div class="difficult">
                <h3>FACILE NIVEAU I</h3>
            </div>


            <h1>QUIZZ FINAL FANTASY</h1>
            <div class="container-quizz">

                <form class="form-quizz">
                    <div class="quizz">
                        <h2>Qui est le protagoniste de FFX ?</h2>

                        <div>
                            <input type="radio" id="Tidus" name="q0" value="a">
                            <label for="Tidus">Tidus</label>
                        </div>
                        <div>
                            <input type="radio" id="Seymour" name="q0" value="b">
                            <label for="Seymour">Seymour</label>
                        </div>
                        <div>
                            <input type="radio" id="Jetch" name="q0" value="c">
                            <label for="Jetch">Jetch</label>
                        </div>
                        <div>
                            <input type="radio" id="Joker" name="q0" value="d">
                            <label for="Joker">Joker</label>
                        </div>

                    </div>


                    <div class="quizz">
                        <h2>Qui est l'antagoniste de FFX ?</h2>

                        <div>
                            <input type="radio" id="Rikku" name="q1" value="a">
                            <label for="Rikku">Rikku</label>
                        </div>
                        <div>
                            <input type="radio" id="Sin" name="q1" value="b">
                            <label for="Sin">Sin</label>
                        </div>
                        <div>
                            <input type="radio" id="Omegaarma" name="q1" value="c">
                            <label for="Omegaarma">Omega arma</label>
                        </div>
                        <div>
                            <input type="radio" id="Hanniballecter" name="q1" value="d">
                            <label for="Hanniballecter">Hannibal lecter</label>
                        </div>

                    </div>


                    <div class="quizz">
                        <h2>Qui est le créateur de FFX ?</h2>

                        <div>
                            <input type="radio" id="Cyprien" name="q2" value="a">
                            <label for="Cyprien">Cyprien</label>
                        </div>
                        <div>
                            <input type="radio" id="Cortex" name="q2" value="b">
                            <label for="Cortex">Cortex</label>
                        </div>
                        <div>
                            <input type="radio" id="James Cameroun" name="q2" value="c">
                            <label for="James Cameroun">James Cameroun</label>
                        </div>
                        <div>
                            <input type="radio" id="Tetsuya Nomura" name="q2" value="d">
                            <label for="Tetsuya Nomura">Tetsuya Nomura</label>
                        </div>

                    </div>


                    <div class="quizz">
                        <h2>Qui est le compositeur de la bande originale du jeu FFX ?</h2>

                        <div>
                            <input type="radio" id="Wakka" name="q3" value="a">
                            <label for="Wakka">Wakka</label>
                        </div>
                        <div>
                            <input type="radio" id="Hans Zimmer" name="q3" value="b">
                            <label for="Hans Zimmer">Hans Zimmer</label>
                        </div>
                        <div>
                            <input type="radio" id="Les PZK" name="q3" value="c">
                            <label for="Les PZK">Les PZK</label>
                        </div>
                        <div>
                            <input type="radio" id="Nobuo Uematsu" name="q3" value="d">
                            <label for="Nobuo Uematsu">Nobuo Uematsu</label>
                        </div>

                    </div>


                    <div class="quizz">
                        <h2>Qui est le héro de FFVIII ?</h2>

                        <div>
                            <input type="radio" id="Squall" name="q4" value="a">
                            <label for="Squall">Squall</label>
                        </div>
                        <div>
                            <input type="radio" id="Shaq O'neal" name="q4" value="b">
                            <label for="Shaq O'neal">Shaq O'neal</label>
                        </div>
                        <div>
                            <input type="radio" id="George Pompidou" name="q4" value="c">
                            <label for="George Pompidou">George Pompidou</label>
                        </div>
                    </div>


                    <div class="quizz">
                        <h2>Qui est le héro dans FFVII ?</h2>

                        <div>
                            <input type="radio" id="Cloud" name="q5" value="a">
                            <label for="Cloud">Cloud</label>
                        </div>
                        <div>
                            <input type="radio" id="Claude" name="q5" value="b">
                            <label for="Claude">Claude</label>
                        </div>
                        <div>
                            <input type="radio" id="Sephiroth" name="q5" value="c">
                            <label for="Sephiroth">Sephiroth</label>
                        </div>
                    </div>


                    <div class="quizz">
                        <h2>Quel âge à Cloud dans FFVII ?</h2>

                        <div>
                            <input type="radio" id="17ans" name="q6" value="a">
                            <label for="17ans">17 ans</label>
                        </div>
                        <div>
                            <input type="radio" id="21ans" name="q6" value="b">
                            <label for="21ans">21 ans</label>
                        </div>
                        <div>
                            <input type="radio" id="25ans" name="q6" value="c">
                            <label for="25ans">25 ans</label>
                        </div>
                        <div>
                            <input type="radio" id="31ans" name="q6" value="d">
                            <label for="31ans">31 ans</label>
                        </div>
                    </div>


                    <div class="quizz">
                        <h2>Comment fut surnommée la Calamité des Dieux par le professeur Gast dans FFVII ?</h2>

                        <div>
                            <input type="radio" id="Meteore" name="q7" value="a">
                            <label for="Meteore">Meteore</label>
                        </div>
                        <div>
                            <input type="radio" id="Jénova" name="q7" value="b">
                            <label for="Jénova">Jénova</label>
                        </div>
                        <div>
                            <input type="radio" id="Séphiroth" name="q7" value="c">
                            <label for="Séphiroth">Séphiroth</label>
                        </div>
                    </div>

                    <button type="submit"> Validez vos choix !</button>

                </form>
                <div class="resultats">
                    <h2>Cliquez sur valider pour voir les résultats</h2>
                    <p class="aide"></p>
                    <p class="note"></p>
                </div>
            </div>
        </div>
        <?php
        showFooter()
        ?>
        <script src="../js/quizzFacile.js"></script>
    </body>

    </html>
<?php
}
?>