<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/navbarPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");

// session_start();

// SI UTILISATEUR CONNECTE //
if (isset($_SESSION["pseudo"])) {  
    displayNavbarConnectedOnly1();

    if (isset($_POST["type_notif"])) {
        notificationsBadge();
        amisBadge();
    } else {
        notifications();
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