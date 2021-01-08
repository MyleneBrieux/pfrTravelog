<?php

session_start();

include_once '../presentation/monProfilPresentation.php';
include_once '../service/UtilisateurSERVICE.php';
include_once '../metier/Utilisateur.php';
include_once '../service/VoyageSERVICE.php';
include_once '../metier/Voyage.php';

    $pseudo = htmlentities(trim($_GET['pseudo'])); //Récupère le pseudo fourni
    $utilisateur = new UtilisateurService();
    // try{
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo); //Recherche les données de l'utilisateur
        //var_dump($profil);
    // }catch(UtilisateurException $e){
        
    // }

    $voyagesService = new VoyageService();
    $data=$voyagesService->nbVoyagesUtilisateur($pseudo);
    $voyages = $voyagesService->chercherVoyagesParPseudo($pseudo);
    $mostRecentVoyage = $voyagesService->VoyagePlusRecentUtilisateur($pseudo);
    $voyageRecent = mysqli_fetch_array($mostRecentVoyage, MYSQLI_ASSOC);
    $mostPopularVoyage = $voyagesService->VoyagePlusPopulaireUtilisateur($pseudo);
    $voyagePopulaire = mysqli_fetch_array($mostPopularVoyage, MYSQLI_ASSOC);
    //var_dump($voyagePopulaire);
    //var_dump($voyageRecent);
    //var_dump($voyages);

profilDebut();

menuLat($profil);

presentationUser($profil);

lastTrip($voyageRecent);

mostPopular($voyagePopulaire);

while($data=mysqli_fetch_array($voyages)){
    autresVoyages($profil, $data);
    //var_dump($data);
}


profilFin();

?>