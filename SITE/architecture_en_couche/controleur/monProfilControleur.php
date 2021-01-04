<?php

session_start();

include_once '../presentation/monProfilPresentation.php';
include_once '../service/UtilisateurSERVICE.php';
include_once '../metier/Utilisateur.php';
include_once '../service/VoyageSERVICE.php';
include_once '../metier/Voyage.php';

    $pseudo = htmlentities(trim($_GET['pseudo']));
    $utilisateur = new UtilisateurService();
    // try{
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo);
        if (isset ($profil['birthday']) && !empty ($profil['birthday'])) {
            $dateNaissance = new DateTime($profil['birthday']);
            $dateAjd = new DateTime();
            $age = date_diff($dateNaissance, $dateAjd);
        }
        //var_dump($profil);
    // }catch(UtilisateurException $e){
        
    // }

    $voyagesService = new VoyageService();
    // $data=$voyagesService->nbVoyagesUtilisateur();
    $voyages = $voyagesService->chercherVoyageParPseudo($pseudo);
    //var_dump($voyages);

profilDebut();

menuLat($profil, $age);

presentationUser($profil);

voyages($profil, $voyages);

profilFin();

?>