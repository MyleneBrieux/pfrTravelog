<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/navbarPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

// GESTION DES ERREURS //
include_once("../service/ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


// On instancie des objets //
$utilisateurService = new UtilisateurService();
$voyageService = new VoyageService();

// Si l'utilisateur est connecté, affichage des menus utilisateur/notifications/amis //
if (isset($_SESSION["pseudo"])) {  

    displayNavbarConnectedOnly1();
    $pseudo=$_SESSION["pseudo"];

    try {
        $info=$utilisateurService->chercherUtilisateurParPseudo($pseudo); // on cherche l'id avec le pseudo de l'utilisateur connecté
    } catch (ServiceException $a) {
        erreur($a->getCode(), $a->getMessage());
    }

    $id=$info["id"];

    try {
        $data=$utilisateurService->compterNotifications($id); // on vérifie si son id est dans la table notifications
    } catch (ServiceException $b) {
        erreur($b->getCode(), $b->getMessage());
    }

        if($data>=1){ // si on trouve 1 notification ou +, alors on affiche le badge et combien de notifications il a
            notificationsBadge1();
            echo ($data);
            notificationsBadge2();
            
            try {
                $rs=$utilisateurService->afficherNotifications($id); // on récupère les informations des notifications
            } catch (ServiceException $c) {
                erreur($c->getCode(), $c->getMessage());
            }

                while($data=mysqli_fetch_array($rs)){
                    
                    $codeComm=$data["code_comm"]; // on récupère le code commentaire de la notif en question
                    try {
                        $comm=$voyageService->recupererCommentaire($codeComm); // on récupère les infos du commentaire depuis son code commentaire
                    } catch (ServiceException $d) {
                        erreur($d->getCode(), $d->getMessage());
                    }
                    
                    $idCommentateur=$comm["id"]; // on récupère l'id de celui qui a écrit le commentaire

                    try {
                        $user=$utilisateurService->chercherUtilisateurParId($idCommentateur); // on récupère les infos du commentateur depuis son id
                    } catch (ServiceException $e) {
                        erreur($e->getCode(), $e->getMessage());
                    }

                    $codeVoyage=$data["code_voyage"]; // on récupère le code voyage de la notif en question

                    try {
                        $voyage=$voyageService->chercherVoyageParCode($codeVoyage); // on récupère les infos du voyage depuis son code voyage
                    } catch (ServiceException $f) {
                        erreur($f->getCode(), $f->getMessage());
                    }

                    afficherNotifications1($user);
                    afficherNotifications2($voyage);
                }

            notificationsBadge3();
        } else { // sinon on n'affiche rien
            notifications();
        }

        try {
            $data=$utilisateurService->compterDemandesAmi($id); 
        } catch (ServiceException $g) {
            erreur($g->getCode(), $g->getMessage());
        }

        if($data>=1){ 
            amisBadge1();
            echo ($data);
            amisBadge2();

            try {
                $rs=$utilisateurService->afficherDemandesAmi($id); // on sélectionne toutes les demandes d'amis
            } catch (ServiceException $h) {
                erreur($h->getCode(), $h->getMessage());
            }

                while($data=mysqli_fetch_array($rs)){
                    $idAmi=$data["id_ami"];

                    try {
                        $donnee=$utilisateurService->afficherPseudoDepuisIdAmi($idAmi); // on les parcourt et on associe l'id ami à son pseudo
                    } catch (ServiceException $i) {
                        erreur($i->getCode(), $i->getMessage());
                    }

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


// Si une personne n'est ni inscrite, ni connectée, alors affichage des liens vers les pages Connexion et Inscription //
} else {
    displayNavbarNotConnected();
}

?>