<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/detail_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");


// if($_SESSION["pseudo"]==$pseudo){
    $isMyVoyage=true;
// }

session_start();

detail_headBodyTop();
detail_corpsPage($isMyVoyage);
detail_basPage();