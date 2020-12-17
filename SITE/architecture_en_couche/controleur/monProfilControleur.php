<?php
    
    //session_start();

include_once '../presentation/monProfilPresentation.php';
include_once '../service/UtilisateurSERVICE.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';


profilDebut();

menuLat();

presentationUser();

voyages();

profilFin();

?>