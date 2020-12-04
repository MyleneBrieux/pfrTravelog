<?php

include_once("../dao/VoyageMysqliDAO.php");

class VoyageService {

// ajout Voyage

    public function addVoyageService($voyage){
        // try {
            $addVoyage= new VoyageMysqlDAO;
            $addVoyage->addVoyageDAO($voyage);
            return $addVoyage;
    //     } catch (addVoyageDaoException $aese){
    //         throw new addVoyageServiceException($aese->getMessage(), $aese->getCode());
    //     }
    // }

// suppression Voyage

    public function suppVoyageService(int $codeVoyage){
        // try {
            $suppVoyage= new VoyageMysqlDAO;
            $suppVoyage->suppVoyageDAO($codeVoyage);
    //     } catch (suppVoyageDaoException $sese){
    //         throw new suppVoyageServiceException($sese->getMessage(), $sese->getCode());
    //     }
    // }

//Modif Voyage

    public function modifVoyageService($voyage){
        // try {
            $modifVoyage= new VoyageMysqlDAO;
            $modifVoyage->modifVoyageDAO($voyage);
    //     } catch (modifVoyageDaoException $sese){
    //         throw new suppVoyageServiceException($sese->getMessage(), $sese->getCode());
    //     }
    // }

}