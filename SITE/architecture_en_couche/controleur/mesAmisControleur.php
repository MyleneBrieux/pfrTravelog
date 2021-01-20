<?php

session_start();

include_once '../presentation/mesAmisPresentation.php';
include_once '../metier/Utilisateur.php';
include_once '../service/UtilisateurSERVICE.php';

$pseudo = htmlentities($_GET["pseudo"]); //Récupère le pseudo fourni
$utilisateur = new UtilisateurService();

try{
    $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo); //Recherche les données de l'utilisateur
    $id = $profil['id'];
    $setBirthday = isset ($profil['birthday']) && !empty ($profil['birthday']);
    $nbAmis = $utilisateur->nbAmisUtilisateur($id);
    $nbDemandesAmis = $utilisateur->nbDemandesAmisUtilisateur($id);
    $isUser = isset($_SESSION['pseudo']) && ($_SESSION['pseudo']==$profil['pseudo']);
}catch(ServiceException $e){
    errreurAmis($e->getCode(), $e->getMessage());
}

    $nbParPage = 10; //nombre d'amis que la page doit afficher
    $total = $nbAmis + $nbDemandesAmis;
    $nombreDePage=ceil($total/$nbParPage);//on calcul le nombre de page en divisant le nombre de voyages par le nombre que l'on veut voir afficher à l'écran
    if (!isset($_GET['page'])){
        $page=1; //si on ne reçoit pas de donnée pour le nombre de page alors on l'initialise à 1
    }else {
        $page = $_GET['page']; //sinon on utilise la valeur fournie
    }
    $start = ($page - 1) * $nbParPage;
    $precedent = $page - 1;
    $suivant = $page + 1;

amisDebut();

menuLat($profil, $setBirthday);

if ($isUser) {
    demandeAmis($nbDemandesAmis);

    try{
        $rs=$utilisateur->demandesAmis($id);
    }catch(ServiceException $e){
        errreurAmis($e->getCode(), $e->getMessage());
    }
    
    while($data=mysqli_fetch_array($rs)){
        $idAmi = $data['id_ami']; //on met l'id de l'ami dans une varialble

        try{
            $ami = $utilisateur->afficherDonnesDepuisIdAmi($idAmi, MYSQLI_ASSOC); //on se sert de la variable pour récupérer les infos de l'ami (son pseudo, id, etc..)
        }catch(ServiceException $e){
            errreurAmis($e->getCode(), $e->getMessage());
        }

        demandeAmi1($isUser, $profil, $ami); //On affiche ce dont on a besoin (pseudo)
        if (isset($_GET["action"]) && $_GET["action"]=="confirmerAmi") { //Si on reçoit une action et que cette action est "confirmerAmi" lors on entre dans le if
            $idAmi = htmlentities($_GET['id_ami']); //On récupère l'id fourni par le bouton pour la suppression
            $id = $profil['id'];
            $ami = $utilisateur->confirmerDemandeAmis($idAmi, $id); //on confirme l'ajout l'utilisateur dans notre liste d'amis
            refresh($profil); //On refresh la page pour actualiser la liste des demandes la liste d'amis
            exit;
        }
        if (isset($_GET["action"]) && $_GET["action"]=="supprimerAmi") { //test suppression ami sans le modal //Si on reçoit une action et que cette action est "supprimerAmi" lors on entre dans le if
            $idAmi = htmlentities($_GET['id_ami']); //On récupère l'id fourni par le bouton pour la suppression
            $id = $profil['id'];
            $ami = $utilisateur->supprimerAmi($idAmi, $id); //On supprime la demande d'amis
            refresh($profil);
            exit;
        }
    }
    listeAmisUtilisateur($nbAmis);
}else {
    listeAmisVisiteur($nbAmis);
}

$rs=$utilisateur->listeAmis($id);
while($data=mysqli_fetch_array($rs)){
    $idAmi = $data['id_ami']; //on met l'id de l'ami dans une varialble

    try{
        $ami = $utilisateur->afficherDonnesDepuisIdAmi1($idAmi, MYSQLI_ASSOC); //on se sert de la variable pour récupérer les infos de l'ami (son pseudo, id, etc..)
    }catch(ServiceException $e){
        errreurAmis($e->getCode(), $e->getMessage());
    }

    ami1($ami, $isUser, $profil); //On affiche ce dont on a besoin (pseudo)
    if (isset($_GET["action"]) && $_GET["action"]=="supprimerAmi") { //test suppression ami sans le modal //Si on reçoit une action et que cette action est "supprimerAmi" lors on entre dans le if
        $idAmi = htmlentities($_GET['id_ami']); //On récupère l'id fourni par le bouton pour la suppression
        $id = $profil['id'];
        $ami = $utilisateur->supprimerAmi($idAmi, $id); //On supprime l'ami de notre liste
        refresh($profil); //On actualise la liste d'amis
        exit;
    }
}



Pagination($page, $profil, $nombreDePage, $precedent, $suivant);

finAmis();

?>