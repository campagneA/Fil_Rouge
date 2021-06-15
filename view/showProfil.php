<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
include_once(__DIR__ . '/showFooter.php');
function showProfil()
{
?>

  <!doctype html>
  <html lang="en">
  <?php
  showHeader("../css/profil.css");
  showNav();
  ?>

  <body>
    <div id="page_profil">
      <div id="mcontainer">
        <nav>
          <ul>
            <li id='profil_useri'><img src="../icones/utilisateur (1).svg" alt=""></li>
            <li id='profil_moneyi'><img src="../icones/carte-de-credit.svg" alt=""></li>
            <li id='profil_msgi'><img src="../icones/bulles-de-discussion-avec-points-de-suspension.svg" alt=""></li>
            <li id='profil_parami'><img src="../icones/reglages (1).svg" alt=""></li>
          </ul>
        </nav>


        <div class="content_div active" id="infos">
          <h6>Informations personnelles</h6>
          <fieldset>
            <div>
              <label for="nom">Nom</label>
              <input class="profil_input" type="text" name="nom" autocomplete="off" title="nom">
              <label for="nom" class="error_msg" id="nom">Nom</label>
            </div>
            <div>
              <label for="nom"></label>
              <label for="prenom">prenom</label>
              <input class="profil_input" type="text" name="prenom" autocomplete="off">
              <label for="prenom" class="error_msg" id="prenom">prenom</label>
            </div>
          </fieldset>
          <fieldset>
            <div>
              <label for="email">email</label>
              <input class="profil_input" type="email" name="mail" autocomplete="off">
              <label for="email" class="error_msg" id="email_msg">ee</label>
            </div>
            <div>
              <label for="mail_secours">email secondaire</label>
              <input class="profil_input" type="email" name="mail_secours" autocomplete="off">
              <label for="mail_secours" class="error_msg " id="mail_secours">email secondaire</label>
            </div>
          </fieldset>
          <fieldset>
            <div>
              <label for="tel">telephone</label>
              <input class="profil_input" type="tel" name="tel" autocomplete="off">
              <label for="tel" class="error_msg">telephone</label>
            </div>
            <div>
              <label for="date_naissance">date de naissance</label>
              <input class="profil_input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_naissance" autocomplete="off">
              <label for="date_naissance" class="error_msg">date de naissance</label>
            </div>
          </fieldset>

          <fieldset id='adresse_fieldset'>

            <div>
              <label for="rue">rue</label>
              <input class="profil_input" type="text" name="rue" autocomplete="off">
              <label for="rue" class="error_msg">rue</label>
            </div>
            <div>
              <label for="ville">ville</label>
              <input class="profil_input" type="text" name="ville" autocomplete="off">
              <label for="ville" class="error_msg">ville</label>
            </div>
          </fieldset>
        </div>
        <!-- <div class="content_div">je suis</div>
        <div class="content_div">sono</div> -->
        <div class="content_div active" id="money">
          <h6>Informations de paiement</h6>
          <fieldset>
            <div>
              <label for="nom">Nom</label>
              <input class="profil_input" type="text" name="nom" autocomplete="off" title="nom">
              <label for="nom" class="error_msg" id="nom">Nom</label>
            </div>
            <div>
              <label for="nom"></label>
              <label for="prenom">prenom</label>
              <input class="profil_input" type="text" name="prenom" autocomplete="off">
              <label for="prenom" class="error_msg" id="prenom">prenom</label>
            </div>
          </fieldset>
          <fieldset>
            <div>
              <label for="email">email</label>
              <input class="profil_input" type="email" name="mail" autocomplete="off">
              <label for="email" class="error_msg" id="email_msg">ee</label>
            </div>
            <div>
              <label for="mail_secours">email secondaire</label>
              <input class="profil_input" type="email" name="mail_secours" autocomplete="off">
              <label for="mail_secours" class="error_msg " id="mail_secours">email secondaire</label>
            </div>
          </fieldset>
          <fieldset>
            <div>
              <label for="tel">telephone</label>
              <input class="profil_input" type="tel" name="tel" autocomplete="off">
              <label for="tel" class="error_msg">telephone</label>
            </div>
            <div>
              <label for="date_naissance">date de naissance</label>
              <input class="profil_input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_naissance" autocomplete="off">
              <label for="date_naissance" class="error_msg">date de naissance</label>
            </div>
          </fieldset>

          <fieldset id='adresse_fieldset'>

            <div>
              <label for="rue">rue</label>
              <input class="profil_input" type="text" name="rue" autocomplete="off">
              <label for="rue" class="error_msg">rue</label>
            </div>
            <div>
              <label for="ville">ville</label>
              <input class="profil_input" type="text" name="ville" autocomplete="off">
              <label for="ville" class="error_msg">ville</label>
            </div>
          </fieldset>
        </div>
      </div>
      <?php
      showFooter();
      ?>
      <script src="../js/jquery-3.6.0.js"></script>
      <script src="../js/profil.js"></script>
  </body>

  </html>
<?php
}
?>