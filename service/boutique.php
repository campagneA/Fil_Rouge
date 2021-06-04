<?php
include_once(__DIR__ . '/../DAO/boutiqueDAO.php');

class BoutiqueService
{
    public function searchBoutique()
    {
        try {
            $listeBoutique = new BoutiqueDAO();
            $listeResult = $listeBoutique->searchBoutique();
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage());
        }
        return $listeResult;
    }

    public function searchBoutiqueBy($id)
    {
        try {
            $listeBoutique = new BoutiqueDAO();
            $listeResult = $listeBoutique->searchBoutiqueBy($id);
        } catch (DAOException $a) {
            // throw new ServiceException($a->getMessage());
        }
        return $listeResult;
    }
}
