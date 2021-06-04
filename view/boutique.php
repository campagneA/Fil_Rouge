<?php
include_once(__DIR__ . "/showHeader.php");
include_once(__DIR__ . "/showNav.php");
include_once(__DIR__ . "/showFooter.php");
function boutique($listeBoutique)
{
?>
  <!doctype html>
  <html lang="en">
  <?php
  showHeader('../css/boutique.css');
  showNav();
  ?>

  <body>
    <?php
    navBoutique();
    listeBoutique($listeBoutique);
    ?>
    <!-- <script src="../js/boutique.js"></script> -->
  </body>

  </html>
<?php
}
?>


<?php
function navBoutique()
{
?>
  <nav class="nav-boutique">
    <h1>Boutique</h1>
    <ul class="position-nav-boutique">
      <li><a href="boutique.php">
          <h3>- Nouveautés -</h3>
        </a></li>
      <li><a href="boutique.php?id=1">
          <h3>- Jeux -</h3>
        </a></li>
      <li><a href="boutique.php?id=2">
          <h3>- Livres -</h3>
        </a></li>
      <li><a href="boutique.php?id=3">
          <h3>- Goodies -</h3>
        </a></li>
    </ul>
  </nav>
<?php
}

function listeBoutique($listeBoutique)
{
?>
  <div class="position-boutique">
    <?php
    foreach ($listeBoutique as $item) {
    ?>
      <div class="img">
        <div>
          <img src="<?= "data:image;base64," . base64_encode($item->getImage()) ?>" alt="<?= $item->getTitre() ?>">
        </div>
        <div class="desc"><?php echo $item->getTitre() ?>
        </div>
        <div class="description-jeu"><?php echo $item->getDescription() ?></div>
        <div class="position-button">
          <button class="button-boutique-left" href="#"><?php echo $item->getPrix() ?> €</button>
          <button class="button-boutique-right" href=<?php echo $item->getId_item() ?>>Ajout Panier</button>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
<?php
}
?>