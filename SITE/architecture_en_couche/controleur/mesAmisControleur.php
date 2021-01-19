<?php

session_start();

include_once '../presentation/mesAmisPresentation.php';
include_once '../metier/Utilisateur.php';
include_once '../service/UtilisateurSERVICE.php';

$pseudo = htmlentities($_GET["pseudo"]); //Récupère le pseudo fourni
$utilisateur = new UtilisateurService();

// if(!isset ($_SESSION["pseudo"]) && $_SESSION['pseudo']!==$profil['pseudo']){
//     header("Location: connexionCONTROLEUR.php");
// }

//try{
    $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo); //Recherche les données de l'utilisateur
    $id = $profil['id'];
    $setBirthday = isset ($profil['birthday']) && !empty ($profil['birthday']);
    $nbAmis = $utilisateur->nbAmisUtilisateur($id);
    $nbDemandesAmis = $utilisateur->nbDemandesAmisUtilisateur($id);
    $isUser = isset($_SESSION['pseudo']) && ($_SESSION['pseudo']==$profil['pseudo']);
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
    
//}catch(UtilisateurException $e){
    //
//}

amisDebut();

menuLat($profil, $setBirthday);

demandeAmis($nbDemandesAmis);
$rs=$utilisateur->demandesAmis($id);
while($data=mysqli_fetch_array($rs)){
    $idAmi = $data['id_ami']; //on met l'id de l'ami dans une varialble
    //var_dump($idAmi);
    $ami = $utilisateur->afficherDonnesDepuisIdAmi($idAmi, MYSQLI_ASSOC); //on se sert de la variable pour récupérer les infos de l'ami (son pseudo, id, etc..)
    demandeAmi1($isUser, $profil, $ami); //On affiche ce dont on a besoin (pseudo)
    //var_dump($ami);
    if (isset($_GET["action"]) && $_GET["action"]=="confirmerAmi") { //Si on reçoit une action et que cette action est "confirmerAmi" lors on entre dans le if
        $idAmi = htmlentities($_GET['id_ami']); //On récupère l'id fourni par le bouton pour la suppression
        //var_dump($idAmi);
        $id = $profil['id'];
        //var_dump($id);
        $ami = $utilisateur->confirmerDemandeAmis($idAmi, $id); //on confirme l'ajout l'utilisateur dans notre liste d'amis
        refresh($profil); //On refresh la page pour actualiser la liste des demandes la liste d'amis
        exit;
    }
    if (isset($_GET["action"]) && $_GET["action"]=="supprimerAmi") { //test suppression ami sans le modal //Si on reçoit une action et que cette action est "supprimerAmi" lors on entre dans le if
        $idAmi = htmlentities($_GET['id_ami']); //On récupère l'id fourni par le bouton pour la suppression
        //var_dump($idAmi);
        $id = $profil['id'];
        //var_dump($id);
        $ami = $utilisateur->supprimerAmi($idAmi, $id); //On supprime la demande d'amis
        refresh($profil);
        exit;
    }
    //var_dump($idAmi);
}

listeAmis($nbAmis);
$rs=$utilisateur->listeAmis($id);
while($data=mysqli_fetch_array($rs)){
    $idAmi = $data['id_ami']; //on met l'id de l'ami dans une varialble
    //var_dump($idAmi);
    $ami = $utilisateur->afficherDonnesDepuisIdAmi1($idAmi, MYSQLI_ASSOC); //on se sert de la variable pour récupérer les infos de l'ami (son pseudo, id, etc..)
    ami1($ami, $isUser, $profil); //On affiche ce dont on a besoin (pseudo)
    //var_dump($ami);
    if (isset($_GET["action"]) && $_GET["action"]=="supprimerAmi") { //test suppression ami sans le modal //Si on reçoit une action et que cette action est "supprimerAmi" lors on entre dans le if
        $idAmi = htmlentities($_GET['id_ami']); //On récupère l'id fourni par le bouton pour la suppression
        //var_dump($idAmi);
        $id = $profil['id'];
        //var_dump($id);
        $ami = $utilisateur->supprimerAmi($idAmi, $id); //On supprime l'ami de notre liste
        refresh($profil); //On actualise la liste d'amis
        exit;
    }
    //var_dump($idAmi);
}



Pagination($page, $profil, $nombreDePage, $precedent, $suivant);

finAmis();

?>