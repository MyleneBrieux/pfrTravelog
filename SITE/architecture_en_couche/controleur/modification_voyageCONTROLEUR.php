<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/modification_voyagePRESENTATION.php");
// include("../service/VoyageSERVICE.php");
include("../metier/Voyage.php");

session_start();

modif_headBodyTop();
modif_corpsPage();
modif_basPage();