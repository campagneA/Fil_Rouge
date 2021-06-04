<?php
session_start();
include_once(__DIR__ . "/../view/boutique.php");
include_once(__DIR__ . "/../model/boutiqueModel.php");
include_once(__DIR__ . "/../service/boutique.php");

try {
    $listeBoutique = new BoutiqueService();
    try {
        if ($_GET) {
            $listeResult = $listeBoutique->searchBoutiqueBy($_GET['id']);
        } else {
            $listeResult = $listeBoutique->searchBoutique();
        }
    } catch (ServiceException $a) {
        echo $a;
    }
    boutique($listeResult);
} catch (Exception $e) {
    echo $e->getMessage();
}
