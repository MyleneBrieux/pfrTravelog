<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/detail_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");


// if($_SESSION["pseudo"]==$pseudo){
    $isMyVoyage=true;
// }



detail_headBodyTop();
detail_corpsPage($isMyVoyage);
detail_basPage();