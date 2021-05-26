<?php
include_once(__DIR__ . '/../DAO/boutiqueDAO.php');
include_once(__DIR__ . '/../model/boutique.php');

class BoutiqueService
{
    public function searchBoutique()
    {
        try {
            $listeBoutique = new BoutiqueDAO;
            $listeBoutique->searchBoutique();
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage());
        }
        return $listeBoutique;
    }
}
