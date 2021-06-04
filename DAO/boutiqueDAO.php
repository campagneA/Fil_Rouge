<?php
include_once(__DIR__ . "/CommonDAO.php");
include_once(__DIR__ . "/../exceptions/DAOException.php");

class BoutiqueDAO extends CommonDAO
{
  function searchBoutique()
  {
    try {
      $bdd = $this->connexion();
      $stmt = $bdd->prepare("select * from items_boutique order by date_ajout desc limit 6;");
      $stmt->execute();
      $rs = $stmt->get_result();
      $data = $rs->fetch_all(MYSQLI_ASSOC);
      $listeBoutique = [];
      $rs->free();
      $bdd->close();
    } catch (mysqli_sql_exception $a) {
      $message = "Un problème est survenu, veuillez réessayé ultérieurement!!!";
      throw new DAOException($message);
    }
    foreach ($data as $value) {
      $objetBoutique = (new Boutique)->setId_item($value["id_item"])
        ->setTitre($value["titre"])
        ->setName($value["name"])
        ->setFormat($value["format"])
        ->setImage($value["image"])
        ->setCat_id($value["cat_id"])
        ->setDescription($value["description"])
        ->setPrix($value["prix"])
        ->setQuantite($value["quantite"])
        ->setDate_ajout($value["date_ajout"]);
      $listeBoutique[] = $objetBoutique;
    }
    return $listeBoutique;
  }

  function searchBoutiqueBy($id)
  {
    try {
      $bdd = $this->connexion();
      $stmt = $bdd->prepare("select * from items_boutique where cat_id = " . $id . " order by date_ajout limit 6;");
      $stmt->execute();
      $rs = $stmt->get_result();
      $data = $rs->fetch_all(MYSQLI_ASSOC);
      $listeBoutique = [];
      $rs->free();
      $bdd->close();
    } catch (mysqli_sql_exception $a) {
      $message = "Un problème est survenu, veuillez réessayé ultérieurement!!!";
      throw new DAOException($message);
    }
    foreach ($data as $value) {
      $objetBoutique = (new Boutique)->setId_item($value["id_item"])
        ->setTitre($value["titre"])
        ->setName($value["name"])
        ->setFormat($value["format"])
        ->setImage($value["image"])
        ->setCat_id($value["cat_id"])
        ->setDescription($value["description"])
        ->setPrix($value["prix"])
        ->setQuantite($value["quantite"])
        ->setDate_ajout($value["date_ajout"]);
      $listeBoutique[] = $objetBoutique;
    }
    return $listeBoutique;
  }
}
