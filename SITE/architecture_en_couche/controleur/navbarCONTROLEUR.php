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

    $pseudo=$_SESSION["pseudo"];
    $info=$utilisateurService->chercherUtilisateurParPseudo($pseudo); // on cherche l'id avec le pseudo de l'utilisateur connecté
    $id=$info["id"];

    $data=$utilisateurService->compterNotifications($id); // on vérifie si son id est dans la table notifications
        if($data>=1){ // si on trouve 1 notification ou +, alors on affiche le badge et combien de notifications il a
            notificationsBadge1();
            echo ($data);
            notificationsBadge2();
            
            $rs=$utilisateurService->afficherNotifications($id); // on récupère les informations des notifications

                while($data=mysqli_fetch_array($rs)){
                    
                    $codeComm=$data["code_comm"]; // on récupère le code commentaire de la notif en question
                    $comm=$voyageService->recupererCommentaire($codeComm); // on récupère les infos du commentaire depuis son code commentaire
                    $idCommentateur=$comm["id"]; // on récupère l'id de celui qui a écrit le commentaire
                    $user=$utilisateurService->chercherUtilisateurParId($idCommentateur); // on récupère les infos du commentateur depuis son id

                    $codeVoyage=$data["code_voyage"]; // on récupère le code voyage de la notif en question
                    $voyage=$voyageService->chercherVoyageParCode($codeVoyage); // on récupère les infos du voyage depuis son code voyage

                    afficherNotifications1($user);
                    afficherNotifications2($voyage);
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

            $rs=$utilisateurService->afficherDemandesAmi($id); // on sélectionne toutes les demandes d'amis
                while($data=mysqli_fetch_array($rs)){
                    $idAmi=$data["id_ami"];
                    $donnee=$utilisateurService->afficherPseudoDepuisIdAmi($idAmi); // on les parcourt et on associe l'id ami à son pseudo
                    afficherAmis($donnee);
                }

            amisBadge3();

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