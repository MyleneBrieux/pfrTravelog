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
    displayTripResults2();
    displayTripOne();
    displayTripTwo();
    displayTripThree();
    displayTripFour();
    displayPages();
}

function displayPageAccueil4(){
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

function displayTripOne(){
    echo
        '<div class="row">
            <img src="../../img/photos/photo_profil_detail_voyage.jpg" class="photoprofil1"/>
            <h1 class="titrevoyage1">Titre</h1>
            <img src="../../img/photos/trevi.jpg" class="photovoyage1"/>
            <div class="encadrevoyage1">
                <p class="textevoyage1">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage1">
                    Découvrir ce voyage
                </a>
            </div>
        </div>';
}

function displayTripTwo(){
    echo
        '<div class="row">
            <img src="../../img/photos/photo_profil_femme1.jpg" class="photoprofil2"/>
            <h1 class="titrevoyage2">Titre</h1>
            <img src="../../img/photos/grece.jpg" class="photovoyage2"/>
            <div class="encadrevoyage2">
                <p class="textevoyage2">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage2">
                    Découvrir ce voyage
                </a>
            </div>
        </div>';
}

function displayTripThree(){
    echo
        '<div class="row">
            <img src="../../img/photos/photo_profil_homme2.jpg" class="photoprofil3"/>
            <h1 class="titrevoyage3">Titre</h1>
            <img src="../../img/photos/lac.jpg" class="photovoyage3"/>
            <div class="encadrevoyage3">
                <p class="textevoyage3">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage3">
                    Découvrir ce voyage
                </a>
            </div>
        </div>';
}

function displayTripFour(){
    echo
        '<div class="row">
            <img src="../../img/photos/photo_profil_femme2.jpg" class="photoprofil4"/>
            <h1 class="titrevoyage4">Titre</h1>
            <img src="../../img/photos/japon.jpg" class="photovoyage4"/>
            <div class="encadrevoyage4">
                <p class="textevoyage4">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage4">
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