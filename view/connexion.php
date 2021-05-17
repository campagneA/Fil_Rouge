<?php
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
