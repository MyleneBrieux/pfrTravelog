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
    contenuListeAmis($ami);
}

finAmis();

?>