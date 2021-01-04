<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/navbarPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");

$utilisateurService = new UtilisateurService();

// SI UTILISATEUR CONNECTE //
if (isset($_SESSION["pseudo"])) {  
    displayNavbarConnectedOnly1();

    notifications();

    amisBadge1();
    $data=$utilisateurService->compterDemandesAmi();
    echo ($data);
    amisBadge2();


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