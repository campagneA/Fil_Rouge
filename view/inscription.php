<?php
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
