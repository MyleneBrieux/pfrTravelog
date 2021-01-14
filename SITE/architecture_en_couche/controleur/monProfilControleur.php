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
        if (isset($_SESSION['pseudo'])) {
            $visiteur = $utilisateur->chercherUtilisateurParPseudo($_SESSION['pseudo']);
        }
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo); //Recherche les données de l'utilisateur
        $setDescription = isset($profil['description']) && !empty($profil['description']); //Récupère si il y a une description
        $setNation = isset($profil['nation']) && !Empty($profil['nation']); //Récupère si il y a une nation
        $setBirthday = isset($profil['birthday']) && !empty($profil['birthday']); //Récupère si il y a une date de naissance
        $isNotUser = $_SESSION["pseudo"] && $_SESSION['pseudo']!==$profil['pseudo'];
        $start = 0;
        $nbParPage = 4;
        $voyagesService = new VoyageService();
        $data=$voyagesService->nbVoyagesUtilisateur($pseudo); //Compte le nombre de voyages de l'utilisateur
        $voyages = $voyagesService->chercherVoyagesParPseudo($pseudo, $start, $nbParPage); //Cherche les voyages de l'utilisateur
        $mostRecentVoyage = $voyagesService->VoyagePlusRecentUtilisateur($pseudo); //Cherche le voyage le + récent de l'utilisateur
        $mostPopularVoyage = $voyagesService->VoyagePlusPopulaireUtilisateur($pseudo); //Cherche le voyage le + populaire de l'utilisateur
        $nbContinent = $voyagesService->compterContinentsUtilisateur($pseudo);
        $nbPays = $voyagesService->compterPaysUtilisateur($pseudo);
    // }catch(UtilisateurException $e){
        
    // }

    if (isset($_POST["ajoutAmi"])) {
        $idAmi = $profil['id'];
        $id = $visiteur['id'];
        $ami = $utilisateur->ajouterAmi($idAmi, $id);
        
    }
profilDebut();

menuLat($profil, $setBirthday, $isNotUser);

presentationUser($profil, $setNation, $setDescription, $nbContinent, $nbPays);

if($mostRecentVoyage && $mostPopularVoyage && $data){
    lastTrip($mostRecentVoyage);

    mostPopular($mostPopularVoyage);
    
    redirectionPageVoyages($profil);
    
    while($data=mysqli_fetch_array($voyages)){
        autresVoyages($data);
    }
} else {
    noTrip();
}


profilFin();

?>