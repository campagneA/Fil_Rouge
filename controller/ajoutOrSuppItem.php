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
    if ($_POST['csrf_token'] == $_SESSION['csrf_token']) {
        $itemBoutique->ajoutItemBoutique($newItem);
        header("Location: boutique.php");
    } else {
    }
} else if ($_GET) {
    $itemBoutique = new BoutiqueService();
    $token = bin2hex(random_bytes(20));
    if ($token == $_SESSION['csrf_token']) {
        $itemBoutique->supprimerItemBoutique($_GET['id']);
        header("Location: boutique.php");
    } else {
        header("Location: boutique.php?csrfError=error");
    }
}
$token = bin2hex(random_bytes(20));
ajoutItem($token);
