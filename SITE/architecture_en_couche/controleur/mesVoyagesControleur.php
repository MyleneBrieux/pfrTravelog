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
        $nbParPage = 4;
    // }catch(UtilisateurException $e){
        
    // }

    $info=$voyagesService->nbVoyagesUtilisateur($pseudo); //Compte le nombre de voyages crées par l'utilisateur dont on visite la page
    $total = $info;
    $nombreDePage=ceil($total/$nbParPage);
    if (!isset($_GET['page'])){
        $page=1;
    }else {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $nbParPage;
    $voyages = $voyagesService->chercherVoyagesParPseudo($pseudo, $start, $nbParPage);
    

voyagesDebut();

menuLat();

if ($isUser) {
    débutCorpsUtilisateur($info); //Si le pseudo correspond à celui de l'utilisateur connecté alors un lien vers la création de voyage s'affiche
} else {
    débutCorpsVisiteur($profil, $info); //Sinon un lien pour accéder à son profil s'affiche à la place
}

tableauEntete(); //en-tête du tableau
while($data=mysqli_fetch_array($voyages)){
    afficherVoyagesUtilisateur($data); //affichage des voyages
}
finTableau();


if ($isUser) {
    encadreUtilisateur(); //affichage d'un lien pour créer un voyage pour l'utilisateur
} else{
    encadreVisiteur($profil); //affichage d'un lien pour le visiteur pour visiter le profil de l'utilisateur
}

for ($page=1; $page<=$nombreDePage;$page++){
    nbPages($page);
}


voyagesFin();

?>