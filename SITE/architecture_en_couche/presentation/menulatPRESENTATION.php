<?php

// FONCTIONS GLOBALES //
function displayMenuLat(){
    displayTopHtml();
    topHeader();
    displayTopBody();
    displayLeftMenuLat();
    displayBottomBody();
    displayBottomHtml();
}


// FONCTIONS EN VRAC //

function displayTopHtml(){
    echo
        '<!DOCTYPE html>
        <html lang="fr">';
}

function topHeader(){
    echo
        '<head>
            <meta charset="utf-8">
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/menulat.css">

            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
        
            <title>
                Menu latéral
            </title>
        </head>';
}

function displayTopBody(){
    echo
        '<body>';
}

function displayLeftMenuLat(){
    echo
        '<div class="menulat fixed-left">
            
            <h6 class="continent"><strong>CONTINENT</strong></h6>
                <div class="arrow-wrapper">
                    <div class="fleche-haut"></div>
                </div>

            <hr>

                <div class="Afrique">
                    <label class="container">Afrique
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="AmeriqueNord">
                    <label class="container">Amérique du Nord
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="AmeriqueSud">
                    <label class="container">Amérique du Sud
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="Asie">
                    <label class="container">Asie
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="Europe">
                    <label class="container">Europe
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="Oceanie">
                    <label class="container">Océanie
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

            <hr>

            <h6 class="pays"><strong>PAYS</strong></h6>
                <div class="arrow-wrapper">
                    <div class="fleche-bas"></div>
                </div>

            <hr>

            <h6 class="ville"><strong>VILLE</strong></h6>
                <div class="arrow-wrapper">
                    <div class="fleche-bas"></div>
                </div>
                
            <hr>

            <h6 class="leplus"><strong>LE PLUS...</strong></h6>
                <div class="arrow-wrapper">
                    <div class="fleche-haut"></div>
                </div>

            <hr>

                <div class="Populaire">
                    <label class="container">Populaire
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="Recent">
                    <label class="container">Récent
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

        </div>';
}

function displayBottomBody(){
    echo
        '</body>';
}

function displayBottomHTML(){
    echo
        '</html>';
}

?>