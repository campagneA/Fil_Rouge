<?php

include_once(__DIR__ . "/../view/showAccueil.php");

try {
  showAccueil();
} catch (Exception $e) {
  echo $e->getMessage();
}
