<?php

// FONCTIONS GLOBALES //
function displayPageAccueil1(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayTopTagContainer();
    displayTopRowNavbar();
}

function displayPageAccueil2(){
    displayBottomRowNavBar();
    displayTopRowMenuLat();
}

function displayPageAccueil3(){
    displayBottomTagContainer();
    displayBottomTagBody();
    displayBottomTagHTML();
}


// FONCTIONS EN VRAC //

function displayTopTagHtml(){
    echo
        '<!DOCTYPE html>
        <html lang="fr">';
}

function displayHead(){
    echo
        '<head>
            <meta charset="utf-8">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/accueil.css">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
        
            <title>
                Accueil
            </title>
        </head>';
}

function displayTopTagBody(){
    echo
        '<body>';
}

function displayTopTagContainer(){
    echo
        '<div class="container-fluid">';
}

function displayTopRowNavbar(){
    echo
        '<div class="row">';
}

function displayBottomRowNavBar(){
    echo
        '</div>';
}

function displayTopRowMenuLat(){
    echo
        '<div class="row">';
}

function displayTripResults1(){
    echo
            '<p class="rsvoyages">';
}

function displayTripResults2(){
    echo
        '</p>
            </div>';
}

function displayTrip($data){
    echo
        '<div class="row">
            <img src="'.$data["id"].'" class="photoprofil1"/>
            <h1 class="titrevoyage1">'.$data["titre"].'</h1>
            <img src="'.$data["couverture"].'" class="photovoyage1"/>
            <div class="encadrevoyage1">
                <p class="textevoyage1">
                    "'.$data["resume"].'"
                </p>
                <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage1">
                    Découvrir ce voyage
                </a>
            </div>
        </div>';
}

function displayPages(){
    echo
        '<div class="row">
            <p class="pages">< 1 2 ... 4 ></p>
        </div>';
}

function displayBottomTagContainer(){
    echo
        '</div>';
}

function displayBottomTagBody(){
    echo
        '</body>';
}

function displayBottomTagHTML(){
    echo
        '</html>';
}

?>