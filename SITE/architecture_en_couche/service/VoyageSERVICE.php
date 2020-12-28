<?php

include_once("../dao/VoyageMysqliDAO.php");

class VoyageService {

// ajout Voyage

    public function addVoyageService(/*$codeVoyage, */$titre, $resume, $datedebut, $datefin, $couverture/*, $statut, $likes, $vues*/){
        // try {
            $addVoyage= new VoyageMysqliDAO;
        $addVoyage->addVoyageDAO(/*$codeVoyage, */$titre, $resume, $datedebut, $datefin, $couverture/*, $statut, $likes, $vues*/);
            return $addVoyage;
    //     } catch (addVoyageDaoException $aese){
    //         throw new addVoyageServiceException($aese->getMessage(), $aese->getCode());
    //     }
    }

// suppression Voyage

    public function suppVoyageService(int $codeVoyage){
        // try {
            $suppVoyage= new VoyageMysqliDAO;
            $suppVoyage->suppVoyageDAO($codeVoyage);
    //     } catch (suppVoyageDaoException $sese){
    //         throw new suppVoyageServiceException($sese->getMessage(), $sese->getCode());
    //     }
    }

//Modif Voyage

    public function modifVoyageService($voyage){
        // try {
            $modifVoyage= new VoyageMysqliDAO;
            $modifVoyage->modifVoyageDAO($voyage);
    //     } catch (modifVoyageDaoException $sese){
    //         throw new suppVoyageServiceException($sese->getMessage(), $sese->getCode());
    //     }
    }

}