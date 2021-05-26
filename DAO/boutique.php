<?php
include_once(__DIR__ . "/../model/boutiqueModel.php");
include_once(__DIR__ . "/CommonDAO.php");
include_once(__DIR__ . "/../exceptions/DAOException.php");

class BoutiqueDAO extends CommonDAO
{
    function searchBoutique()
    {
        try {
            $bdd = $this->connexion();
            $stmt = $bdd->prepare("select * from boutique;");
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
            $objetBoutique = (new Boutique)->setID($value["id"])
                ->setImage($value["image"])
                ->setDescription($value["description"])
                ->setPrix($value["prix"])
                ->setTitre($value["titre"]);
            $listeBoutique[] = $objetBoutique;
        }
        return $listeBoutique;
    }
}
