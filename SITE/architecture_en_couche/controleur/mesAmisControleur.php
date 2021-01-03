<?php

session_start();

if(!isset ($_SESSION["pseudo"])){
    header("Location: connexionCONTROLEUR.php");
}

include_once '../presentation/mesAmisPresentation.php';
include '../metier/Utilisateur.php';
include_once '../service/UtilisateurSERVICE.php';

//$pseudo = htmlentities($_GET["pseudo"]);
//try{
    //$utilisateur = utilisateurSERVICE::chercherPseudo($pseudo);
//}catch(UtilisateurException $e){
    //
//}

amisDebut();

menuLat();

listeAmis();

contenuListeAmis();

nbPages();

finAmis();

?>