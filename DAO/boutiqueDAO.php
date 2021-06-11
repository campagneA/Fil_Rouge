<?php
include_once(__DIR__ . "/CommonDAO.php");
include_once(__DIR__ . "/../exceptions/DAOException.php");

class BoutiqueDAO extends CommonDAO
{
    function searchBoutique()
    {
        try {
            $bdd = $this->connexion();
            $stmt = $bdd->prepare("SELECT * FROM items_boutique ORDER BY id_item DESC LIMIT 6;");
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
            $stmt = $bdd->prepare("SELECT * FROM items_boutique WHERE cat_id = $id ORDER BY date_ajout LIMIT 6;");
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

    public function findById($id)
    {
        $bdd = $this->connexion();
        $stmt = $bdd->prepare("SELECT * from items_boutique WHERE id_item = $id;");
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        $rs->free();
        $bdd->close();
        return $data;
    }

    public function ajoutItemBoutique($item)
    {
        $bdd = $this->connexion();
        $titre = $item->getTitre(); //$_POST['titre'];
        $name = $item->getName(); //$_FILES['myfile']['name'];
        $format = $item->getFormat(); //$_FILES['myfile']['type'];
        $data = $item->getImage(); //file_get_contents($_FILES['myfile']['tmp_name']);
        $catId = $item->getCat_id(); //$_POST['cat_id'];
        $desc = $item->getDescription(); //$_POST['description'];
        $prix = $item->getPrix(); //$_POST['prix'];
        $quantite = $item->getQuantite(); //$_POST['quantite'];

        $stmt = $bdd->prepare("INSERT INTO items_boutique VALUES('',?,?,?,?,?,?,?,?, SYSDATE());");
        $stmt->bind_Param("ssssisdi", $titre, $name, $format, $data, $catId, $desc, $prix, $quantite);
        $stmt->execute();
        $bdd->close();
    }

    public function modififierItemBoutique($item)
    {
        $bdd = $this->connexion();
        $id = $item->getId_item();
        $titre = $item->getTitre(); //$_POST['titre'];
        $name = $item->getName(); //$_FILES['myfile']['name'];
        $format = $item->getFormat(); //$_FILES['myfile']['type'];
        $data = $item->getImage(); //file_get_contents($_FILES['myfile']['tmp_name']);
        $catId = $item->getCat_id(); //$_POST['cat_id'];
        $desc = $item->getDescription(); //$_POST['description'];
        $prix = $item->getPrix(); //$_POST['prix'];
        $quantite = $item->getQuantite(); //$_POST['quantite'];

        $stmt = $bdd->prepare(
            "UPDATE items_boutique
            SET titre = '$titre',
            name = '$name',
            format = '$format',
            image = '$data',
            cat_id = $catId,
            description = '$desc',
            prix = $prix,
            quantite = $quantite
            WHERE id_item = $id;"
        );
        $stmt->execute();
        $bdd->close();
    }

    public function supprimerItemBoutique($id)
    {
        $bdd = $this->connexion();
        $stmt = $bdd->prepare("DELETE FROM items_boutique WHERE id_item = $id;");
        $stmt->execute();
        $bdd->close();
    }
}
