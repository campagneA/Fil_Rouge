<?php
include_once(__DIR__ . '/../view/showHeader.php');
include_once(__DIR__ . '/../view/showNav.php');
include_once(__DIR__ . '/../view/showFooter.php');
include_once(__DIR__ . '/../view/showPanier.php');
?>
<?php
//si l'user est connecté : lui creer un panier s'il n'en a pas;
showPanier();
//si l'user n'est pas connecté enregistrer ses ajouts dans un panier provisoire?
?>