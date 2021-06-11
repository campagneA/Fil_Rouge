<?php
session_start();
include_once(__DIR__ . "/../view/boutique.php");
include_once(__DIR__ . "/../model/boutiqueModel.php");
include_once(__DIR__ . "/../service/boutique.php");

if ($_POST) {
    $itemBoutique = new BoutiqueService();
    $newImage = file_get_contents($_FILES['myfile']['tmp_name']);

    $newItem = (new Boutique())
        ->setTitre($_POST['titre'])
        ->setName($_FILES['myfile']['name'])
        ->setFormat($_FILES['myfile']['type'])
        ->setImage($newImage)
        ->setCat_id($_POST['cat_id'])
        ->setDescription($_POST['description'])
        ->setPrix($_POST['prix'])
        ->setQuantite($_POST['quantite']);

    $itemBoutique->ajoutItemBoutique($newItem);
    header("Location: boutique.php");
} else if ($_GET) {
    $itemBoutique = new BoutiqueService();

    $item = $itemBoutique->findById($_GET['id']);

    htmlModifierItem($item);
}
