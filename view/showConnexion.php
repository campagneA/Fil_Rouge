<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
function showConnexion($token)
{
?>
  <!DOCTYPE html>
  <html lang="en">
  <?php
  showHeader();
  showNav();
  ?>

  <body>
    <div id="page_connexion">
      <form action="" id="login_form" method="POST">
        <h4>Connexion</h4>
        <input type="text" placeholder="Pseudo" id="pseudo">
        <input type="password" placeholder="Mot de passe" id="mdp">
        <input type="hidden" id="csrf_token" value="<?php echo $token; ?>">
        <input type="button" id="login_btn" value="Se connecter">
        <label>
          <input type="checkbox" checked="checked" name="remember"> remember me
        </label>

        <a href="">J'ai oublié mon mot de passe</a>
        <a href="">J'ai oublié mes identifiants</a>
        <a href="inscription.php">Creer un compte</a>
      </form>
    </div>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/connexion.js"></script>
  </body>

  </html>
<?php
}
?>