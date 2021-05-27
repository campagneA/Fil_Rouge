<?php
include_once(__DIR__ . "/showHeader.php");
include_once(__DIR__ . "/showFooter.php");
include_once(__DIR__ . "/showNav.php");

// function inscription()
// {

//   pageInscription();  CHANGEMENT : les appels des sous fonctions sont dans la fonction pageInscription();
// }

function pageInscription()
{
?>

  <!doctype html>
  <html lang="en">
  <?php
  showHeader("../css/inscription.css");
  ?>

  <body>
    <?php
    showNav();
    ?>
    <form action="inscription.php" method="POST">
      <h1>INSCRIPTION</h1>
      <h2>Pseudo</h2>
      <input type="text" name="pseudo" placeholder="SquareEnix" class="center" value="<?php if(isset($pseudo)) {echo $pseudo;}?>" autofocus>
      <div>
        <h5 class="left">Nom :</h5>
        <input type="text" name="nom" placeholder="Nom" value="<?php if(isset($nom)) {echo $nom;}?>">

        <h5 class="left">Prenom :</h5>
        <input type="text" name="prenom" placeholder="Prénom" value="<?php if(isset($prenom)) {echo $prenom;}?>">
      </div>
      <div>
        <h5>Adresse Mail :</h5>
        <input type="mail" name="mail" placeholder="exemple@exemple.com" value="<?php if(isset($mail)) {echo $mail;}?>">
        <h5>Confirmer Mail :</h5>
        <input type="mail" name="mailConf" placeholder="exemple@exemple.com" value="<?php if(isset($mailConf)) {echo $mailConf;}?>">
      </div>
      <div>
        <h5>Mot de passe :</h5>
        <input type="password" name="passWord2" placeholder="*******">
        <h5>Confirmer :</h5>
        <input type="password" name="passWordConf" placeholder="*******">
      </div>
      <ul class="position-button-inscription">
        <li><button type="submit" name="inscription">Inscription</button></li>
      </ul>
      <div class="position">
        <a href="profil.php" type="button">
          <h6>Vous avez un compte? <br /> Connecte toi ICI !!!</h6>
        </a>
      </div>
    </form>
    <?php
    
    ?>

  </body>

  </html>

<?php
  showFooter();
}
