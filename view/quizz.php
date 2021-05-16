<?php
function choixQuizz()
{
?>
    <div class="titren4"> Choisis ton quizz ! </div>

    <div class="containeure">

        <div class="blockn4 block1n4">
            <div class="boxn4">
                <div>
                    <a href="quizz-facile1.php"> Facile </a>
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
}

function afficheQuizz($index)
{
?>
    <div class="container-global">
        <div class="difficult">
            <h3>FACILE NIVEAU I</h3>
        </div>


        <h1>QUIZZ FINAL FANTASY</h1>
        <div class="container-quizz">

            <form class="form-quizz">
                <div class="quizz">
                    <h2>Qui est le protagoniste ?</h2>

                    <div>
                        <input type="radio" name="q1" value="1">Tidus
                    </div>
                    <div>
                        <input type="radio" name="q1" value="1">Seymour
                    </div>
                    <div>
                        <input type="radio" name="q1" value="1">Jetch
                    </div>
                    <div>
                        <input type="radio" name="q1" value="1">Joker
                    </div>

                </div>

                <form class="form-quizz">
                    <div class="quizz">
                        <h2>Qui est l'antagoniste ?</h2>

                        <div>
                            <input type="radio" name="q1" value="1">Rikku
                        </div>
                        <div>
                            <input type="radio" name="q1" value="1">Sin
                        </div>
                        <div>
                            <input type="radio" name="q1" value="1">Jetch
                        </div>
                        <div>
                            <input type="radio" name="q1" value="1">Hannibal lecter
                        </div>

                    </div>

                    <form class="form-quizz">
                        <div class="quizz">
                            <h2>Qui en est le créateur ?</h2>

                            <div>
                                <input type="radio" name="q1" value="1">Cyprien
                            </div>
                            <div>
                                <input type="radio" name="q1" value="1">Seymour
                            </div>
                            <div>
                                <input type="radio" name="q1" value="1">James Cameroun
                            </div>
                            <div>
                                <input type="radio" name="q1" value="1">Tetsuya Nomura
                            </div>

                        </div>

                        <form class="form-quizz">
                            <div class="quizz">
                                <h2>Qui est le compositeur de la bande originale du jeu ?</h2>

                                <div>
                                    <input type="radio" name="q1" value="1">Wakka
                                </div>
                                <div>
                                    <input type="radio" name="q1" value="1">Hans Zimmer
                                </div>
                                <div>
                                    <input type="radio" name="q1" value="1">Les PZK
                                </div>
                                <div>
                                    <input type="radio" name="q1" value="1">Nobuo Uematsu
                                </div>

                            </div>

                            <form class="form-quizz">
                                <div class="quizz">
                                    <h2>Qui est le compositeur de la bande originale du jeu ?</h2>

                                    <div>
                                        <input type="radio" name="q1" value="1">Wakka
                                    </div>
                                    <div>
                                        <input type="radio" name="q1" value="1">Hans Zimmer
                                    </div>
                                    <div>
                                        <input type="radio" name="q1" value="1">Les PZK
                                    </div>
                                    <div>
                                        <input type="radio" name="q1" value="1">Nobuo Uematsu
                                    </div>

                                </div>

                                <form class="form-quizz">
                                    <div class="quizz">
                                        <h2>Qui est le compositeur de la bande originale du jeu ?</h2>

                                        <div>
                                            <input type="radio" name="q1" value="1">Wakka
                                        </div>
                                        <div>
                                            <input type="radio" name="q1" value="1">Hans Zimmer
                                        </div>
                                        <div>
                                            <input type="radio" name="q1" value="1">Les PZK
                                        </div>
                                        <div>
                                            <input type="radio" name="q1" value="1">Nobuo Uematsu
                                        </div>

                                    </div>

                                    <form class="form-quizz">
                                        <div class="quizz">
                                            <h2>Qui est le compositeur de la bande originale du jeu ?</h2>

                                            <div>
                                                <input type="radio" name="q1" value="1">Wakka
                                            </div>
                                            <div>
                                                <input type="radio" name="q1" value="1">Hans Zimmer
                                            </div>
                                            <div>
                                                <input type="radio" name="q1" value="1">Les PZK
                                            </div>
                                            <div>
                                                <input type="radio" name="q1" value="1">Nobuo Uematsu
                                            </div>

                                        </div>

                                        <form class="form-quizz">
                                            <div class="quizz">
                                                <h2>Qui est le compositeur de la bande originale du jeu ?</h2>

                                                <div>
                                                    <input type="radio" name="q1" value="1">Wakka
                                                </div>
                                                <div>
                                                    <input type="radio" name="q1" value="1">Hans Zimmer
                                                </div>
                                                <div>
                                                    <input type="radio" name="q1" value="1">Les PZK
                                                </div>
                                                <div>
                                                    <input type="radio" name="q1" value="1">Nobuo Uematsu
                                                </div>

                                            </div>

                                            <button type="submit"> Validez vos choix !</button>

                                        </form>
                                        <div class="resultats">
                                            <h2>Cliquez sur valider pour voir les résultats</h2>
                                        </div>
        </div>
    </div>
<?php
}
?>