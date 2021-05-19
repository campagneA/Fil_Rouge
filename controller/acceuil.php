<?php
include_once(__DIR__ . "/../view/showAccueil.php");
include_once(__DIR__ . "/../view/showFooter.php");

// showHeader();
try {
  showAccueil();
} catch (Exception $e) {
  echo $e->getMessage();
}
