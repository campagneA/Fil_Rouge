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
  showHeader();
  showNav();
  ?>

  <body>
    <div class="page_profil">
      <h3>Mon compte</h3>
      <div class="cont_profil">
        <nav id="nav_profil">
          <ul>
            <li id='profil_useri'><img src="../icones/utilisateur (1).svg" alt=""></li>
            <li id='profil_moneyi'><img src="../icones/carte-de-credit.svg" alt=""></li>
            <li id='profil_msgi'><img src="../icones/bulles-de-discussion-avec-points-de-suspension.svg" alt=""></li>
            <li id='profil_parami'><img src="../icones/reglages (1).svg" alt=""></li>
          </ul>
        </nav>
        <div class="profil_user_infos active">
          <div class="fieldsets_container ">
            <h6>Profil</h6>
            <fieldset>
              <label for="nom">Nom</label>
              <input class="profil_input" type="text" name="nom" autocomplete="off" title="nom">
              <label for="prenom">prenom</label>
              <input class="profil_input" type="text" name="prenom" autocomplete="off">
              <label for="email">email</label>
              <input class="profil_input" type="email" name="mail" autocomplete="off">
              <label for="mail_secours">email secondaire</label>
              <input class="profil_input" type="email" name="mail_secours" autocomplete="off">
              <label for="tel">telephone</label>
              <input class="profil_input" type="tel" name="tel" autocomplete="off">
              <label for="date_naissance">date de naissance</label>
              <input class="profil_input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_naissance" autocomplete="off">
            </fieldset>
            <label for="adresse_fieldset" id="adresse_label">Adresse</label>
            <fieldset id='adresse_fieldset'>
              <label for="adresse">rue</label>
              <input class="profil_input" type="text" name="rue" autocomplete="off">
              <label for="adresse">ville</label>
              <input class="profil_input" type="text" name="ville" autocomplete="off">
            </fieldset>


            <!-- <label for="date_naissance">date de naissance</label> -->

          </div>
        </div>
        <div class="profil_money_infos fieldsets_container ">
          <h6>Informations de paiement</h6>
          <fieldset>
            <input class="profil_input" type="text" name="adr_livraison" autocomplete="off">
            <input class="profil_input" type="text" name="adr_facturation" autocomplete="off">
            <input class="profil_input" type="tel" name="carte_credit" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19">
          </fieldset>
          <fieldset>
            <button>Historique des commandes</button>
            <button>Commandes en cours</button>
          </fieldset>
        </div>
        <div class="profil_msg_config fieldsets_container ">
          <h6>Forum</h6>
          <fieldset>
            <input class="profil_input" type="text" name="pseudo" autocomplete="off">
            <input class="checkbox" type="checkbox" value="true" name="notifs_forum" autocomplete="off">recevoir des notifications du forum</input>

            <label for="about_me">à propos de vous</label>
            <textarea class="profil_input" name="about_me" id="" cols="30" rows="10"></textarea>
          </fieldset>
        </div>
        <div class="profil_param_compte fieldsets_container ">

          <input class="checkbox" type="checkbox" value="true" name="annonces_commerciales" autocomplete="off">vous consentez à recevoir des offres commerciales de nous ou nos partenaires</input>

        </div>
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