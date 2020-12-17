<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/navbarPRESENTATION.php");

session_start();

// SI UTILISATEUR CONNECTE //
if (isset($_SESSION["pseudo"])) {  
    displayNavbarConnectedOnly();
// SI UTILISATEUR NON-CONNECTE/INSCRIT //
} else {
    displayNavbarNotConnected();
}

?>