<?php
session_start();
include_once(__DIR__ . "/../view/all.php");
include_once(__DIR__ . "/../view/connexion.php");
include_once(__DIR__ . "/../view/showHeader.php");
showHeader();

?>

<body>

  <link rel="stylesheet" href="../css/profil.css">
  <?php

  if ($_SESSION) {
    // Si connecté, afficheProfil()
  } else {
    pageConnexion();
  }
  ?>
</body>

</html>