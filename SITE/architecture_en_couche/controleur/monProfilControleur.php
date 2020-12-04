<?php

include_once '../presentation/monProfilPresentation.php';
include '../metier/Utilisateur.php';
include '../metier/Voyages.php';

profilDebut();

menuLat();

presentationUser();

voyagesUser();

profilFin();

?>