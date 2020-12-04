<?php

include_once '../presentation/mesVoyagesPresentation.php';
include '../metier/Utilisateur.php';
include '../metier/Voyages.php';

voyagesDebut();

menuLat();

débutCorps();

afficherUser();

afficherVoyages();

nbPages();

voyagesFin();

?>