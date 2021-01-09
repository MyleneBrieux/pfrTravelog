<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/navbarPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

$utilisateurService = new UtilisateurService();
$voyageService = new VoyageService();

// SI UTILISATEUR CONNECTE //
if (isset($_SESSION["pseudo"])) {  

    displayNavbarConnectedOnly1();

    $filtre=$utilisateurService->filtreBarreRecherche();
    navbarSearch($filtre);
    // navbarSearch();

    $pseudo=$_SESSION["pseudo"];
    $info=$utilisateurService->chercherUtilisateurParPseudo($pseudo); // on cherche l'id avec le pseudo de l'utilisateur connecté
    $id=$info["id"];

    $data=$utilisateurService->compterNotifications($id); // on vérifie si son id est dans la table notifications
        if($data>=1){ // si on trouve 1 notification ou +, alors on affiche le badge et combien de notifications il a
            notificationsBadge1();
            echo ($data);
            notificationsBadge2();
            
            $rs=$voyageService->afficherVoyages();
            while($data=mysqli_fetch_array($rs)){
                $id=$data["id"];
                $donnee=$utilisateurService->afficherPseudoDepuisId($id);
                afficherNotifications1($donnee);
                afficherNotifications2($data);
            }

            notificationsBadge3();
        } else { // sinon on n'affiche rien
            notifications();
        }

    $data=$utilisateurService->compterDemandesAmi($id); 
        if($data>=1){ 
            amisBadge1();
            echo ($data);
            amisBadge2();
        } else { 
            amis();
        }

    displayNavbarConnectedOnly2();

    if (isset($_SESSION["photoprofil"])) {
        photoUtilisateurBdd($data);
    } else {
        photoUtilisateurDefaut();
    }

    displayNavbarConnectedOnly3();


// SI UTILISATEUR NON-CONNECTE/INSCRIT //
} else {
    displayNavbarNotConnected();
}

?>