<?php
include_once(__DIR__ . "/showHeader.php");
include_once(__DIR__ . "/showNav.php");
include_once(__DIR__ . "/showFooter.php");
function boutique($listeBoutique, $csrfErrors = "")
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
    if ($csrfErrors) {
    ?>
      <span>Une erreur est survenue (Code Erreur : CSRF)</span>
    <?php
    }
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
      <li><a href="ajoutOrSuppItem.php">
          <h3>Ajout Item</h3>
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
        <div id="ajout<?php echo $item->getId_item() ?>" class="button-admin">
          <a href="modifierItem.php?id=<?php echo $item->getId_item() ?>"><button class="button-modifier-item">Modifier</button></a>
          <a href="ajoutOrSuppItem.php?id=<?php echo $item->getId_item() ?>"><button class='button-supp-item'>X</button></a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
<?php
}

function ajoutItem($token)
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

    htmlAjoutItem($token);
    ?>
    <!-- <script src="../js/boutique.js"></script> -->
  </body>

  </html>
<?php
}

function htmlAjoutItem($token)
{
?>
  <form class="form-ajout" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <p></p>
    <p>Titre : <input type="text" name="titre"></p>
    <p>Catégorie : <input type="int" name="cat_id"> / 1 => Jeux / 2 => Livres / 3 => Goodies /</p>
    <p>Description : <input type="text" name="description"></p>
    <p>Prix Unitaire : <input type="float" name="prix"> €</p>
    <p>Quantité : <input type="int" name="quantite"></p>
    <input type="hidden" name="csrf_token" value="<?php echo $token ?>">
    <input type="submit" name="btn" value="upload">
  </form>
<?php
}

function modifierItem($item)
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

    htmlModifierItem($item);
    ?>
    <!-- <script src="../js/boutique.js"></script> -->
  </body>

  </html>
<?php
}

function htmlModifierItem($item)
{
?>
  <form class="form-ajout" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" value="<?php $item->getName() ?>">
    <p></p>
    <p>Titre : <input type="text" name="titre" value="<?php $item->getTitre() ?>"></p>
    <p>Catégorie : <input type="int" name="cat_id" value="<?php $item->getCat_Id() ?>"> / 1 => Jeux / 2 => Livres / 3 => Goodies /</p>
    <p>Description : <input type="text" name="description" value="<?php $item->getDescription() ?>"></p>
    <p>Prix Unitaire : <input type="float" name="prix" value="<?php $item->getPrix() ?>"> €</p>
    <p>Quantité : <input type="int" name="quantite" value="<?php $item->getQuantite() ?>"></p>
    <input type="submit" name="btn" value="upload">
  </form>
<?php
}
