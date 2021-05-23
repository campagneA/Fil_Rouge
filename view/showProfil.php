<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
include_once(__DIR__ . '/showFooter.php');
function showProfil()
{
  showHeader();
  showNav();
?>

  <!doctype html>
  <html lang="en">
  <?php
  showHeader();
  showNav();
  ?>

  <body>
    <div class="page_profil">
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
          <div>
            <fieldset>
              <input type="text" name="nom" autocomplete="off" placeholder="nom">
              <!-- <label for="nom">Nom</label> -->
              <input type="text" name="prenom" autocomplete="off" placeholder="prenom">
              <!-- <label for="prenom">prenom</label> -->
              <input type="email" name="email" autocomplete="off" placeholder="email">
              <!-- <label for="email">email</label> -->
              <input type="tel" name="tel" autocomplete="off" placeholder="telephone">
              <!-- <label for="tel">telephone</label> -->
            </fieldset>

            <fieldset>
              <input type="text" name="rue" autocomplete="off" placeholder="Rue">
              <!-- <label for="adresse">adresse</label> -->
              <input type="text" name="ville" autocomplete="off" placeholder="Ville">
              <!-- <label for="adresse">adresse</label> -->

            </fieldset>

            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_naissance" autocomplete="off" placeholder="date de naissance">
            <!-- <label for="date_naissance">date de naissance</label> -->

          </div>
        </div>
        <div class="profil_money_infos">
          <input type="money">
          abcdeefefegrgeg
        </div>
        <div class="profil_msg_config">
          mesasgasgasagashieuhifhei
        </div>
        <div class="profil_param_compte">
          jeofjsofjsoefjoiejfojfosjfoi
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