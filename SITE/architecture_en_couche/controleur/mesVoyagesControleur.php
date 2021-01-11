<?php

session_start();

include_once '../presentation/mesVoyagesPresentation.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';
include_once '../service/VoyageSERVICE.php';
include_once '../service/UtilisateurSERVICE.php';

$pseudo = htmlentities(trim($_GET['pseudo'])); //Récupère le pseudo fourni
    $utilisateur = new UtilisateurService();
    $voyagesService = new VoyageService();
    // try{
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo); //Recherche les données de l'utilisateur
        $isUser = $_SESSION['pseudo'] && $_SESSION['pseudo']==$profil['pseudo'];
    // }catch(UtilisateurException $e){
        
    // }

    $info=$voyagesService->nbVoyagesUtilisateur($pseudo); //Compte le nombre de voyages crées par l'utilisateur dont on visite la page
    $voyages = $voyagesService->chercherVoyagesParPseudo($pseudo);
    

voyagesDebut();

menuLat();

if ($isUser) {
    débutCorpsUtilisateur($info); //Si le pseudo correspond à celui de l'utilisateur connecté alors un lien vers la création de voyage s'affiche
} else {
    débutCorpsVisiteur($profil, $info); //Sinon un lien pour accéder à son profil s'affiche à la place
}

tableauEntete(); //en-tête du tableau
while($data=mysqli_fetch_array($voyages)){
    afficherVoyages($data); //affichage des voyages
}
finTableau();

if ($isUser) {
    encadreUtilisateur(); //affichage d'un lien pour créer un voyage pour l'utilisateur
} else{
    encadreVisiteur($profil); //affichage d'un lien pour le visiteur pour visiter le profil de l'utilisateur
}

nbPages();

voyagesFin();

?>