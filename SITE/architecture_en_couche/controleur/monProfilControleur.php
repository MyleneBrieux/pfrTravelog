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
    //var_dump($voyages);

    // while($data=mysqli_fetch_array($voyages)){
    //     var_dump($data);
    // }

profilDebut();

menuLat($profil);

presentationUser($profil);

while($data=mysqli_fetch_array($voyages)){
    voyages($profil, $data);
    var_dump($data);
}


profilFin();

?>