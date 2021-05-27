<?php
function showNav()
{
?>
  <header>
    <div class="header_navbar" id="header_navbar">
      <div class="logo">
        <a href="acceuil.php">
          <img src="../Logo/SquareEnix_title.jpg" alt="logo_squareEnix" title="Home">
        </a>
      </div>
      <nav class="nav_gauche">
        <ul>
          <li><a href="jeux.php">Jeux</a></li>
          <li><a href="histoire.php">histoire</a></li>
          <li><a href="forum.php">forum</a></li>
          <li><a href="quizz.php">quizz</a></li>
          <li><a href="boutique.php">boutique</a></li>
        </ul>
      </nav>
      <nav class="nav_droite">
        <ul>
          <?php
          if (isset($_SESSION['pseudo'])) {
          ?>
            <li><a href="deconnexion.php">Deconnexion</a></li>
          <?php
          }
          ?>

          <li><a href="research.php"><img src="../logo/Search.jpg" alt="Search" title="Rechercher"></a></li>
          <?php
          if (isset($_SESSION['pseudo'])) {
          ?>
            <li id="icone_profil"><a href="profil.php"><img src="../logo/Member.gif" alt="Profil" title="Profil">
              <?php
            } else {
              ?>
            <li id="icone_profil"><a href="connexion.php"><img src="../logo/Member.gif" alt="Profil" title="Profil">
              <?php
            }
              ?>
              </a>
              <div id="icone_profile_drop">

                <p><a href="#">Se connecter</a></p>
                <p><a href="#">S'inscrire</a></p>

              </div>
            </li>

            <li><a href="panier.php"><img src="../logo/Boutique.jpg" alt="panier" title="Panier"></a></li>

        </ul>
        </a>

      </nav>
      <div class="btn_toggle_nav" onclick="toggleNav()"></div>
      <nav class="nav_sidebar">
        <ul>
          <li><a href="jeux.php">Jeux</a></li>
          <li><a href="histoire.php">histoire</a></li>
          <li><a href="forum.php">forum</a></li>
          <li><a href="quizz.php">quizz</a></li>
          <li><a href="boutique.php">boutique</a></li>
          <br>
          <li><input type="text" placeholder="Rechercher"></li>
          <li><a href="inscription.php">ins</a></li>
          <li><a href="panier.php">panier</a></li>
        </ul>
      </nav>

    </div>
  </header>
<?php
}
?>