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
    $isUser = $_SESSION['pseudo'] && $_SESSION['pseudo']==$profil['pseudo'];
    $nbParPage = 10;
    $total = $nbAmis;
    $nombreDePage=ceil($total/$nbParPage);//on calcul le nombre de page en divisant le nombre de voyages par le nombre que l'on veut voir afficher à l'écran
    if (!isset($_GET['page'])){
        $page=1; //si on ne reçoit pas de donnée pour le nombre de page alors on l'initialise à 1
    }else {
        $page = $_GET['page']; //sinon on utilise la valeur fournie
    }
    $start = ($page - 1) * $nbParPage;
    $precedent = $page-1;
    $suivant = $page + 1;
    
//}catch(UtilisateurException $e){
    //
//}



amisDebut();

menuLat($profil, $setBirthday);

listeAmis($nbAmis);
$rs=$utilisateur->listeAmis($id);
while($data=mysqli_fetch_array($rs)){
    $idAmi = $data['id_ami'];
    $ami = $utilisateur->afficherPseudoDepuisIdAmi($idAmi, MYSQLI_ASSOC);
    contenuListeAmis($ami, $isUser);
}

Pagination($page, $profil, $nombreDePage, $precedent, $suivant);

finAmis();

?>