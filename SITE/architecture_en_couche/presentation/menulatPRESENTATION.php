<?php

// FONCTIONS GLOBALES //
function displayTopMenuLat(){
    displayTopHtml();
    topHeader();
    displayTopBody();
    displayTitreContinent();
}

function displayBottomMenuLat(){
    displayLePlus();
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

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            
            <script src="../../libs/script_js/scriptMenuLat.js"></script>

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

function displayTitreContinent(){
    echo 
        '<div class="menulat fixed-left">
                
                <h6 class="titreContinent"><strong>CONTINENT</strong></h6>

                <hr>';
}

function displayContinents($data){
    echo
        '<div class="continent">
            <label class="container">' . $data["continent"] . '
                <input type="checkbox" id="checkedContinent">
                <span class="checkmark"></span>
            </label>
        </div>';
}

function displayTitrePays(){
    echo
        '<hr>

        <h6 class="titrePays"><strong>PAYS</strong></h6>

        <hr>';
}

function displayPays($data){
    echo
        '<div class="pays">
            <label class="container">' . $data["pays"] . '
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>';
}

function displayTitreVille(){
    echo
        '<hr>
        
        <h6 class="titreVille"><strong>VILLE</strong></h6>
        
        <hr>';
}

function displayVilles($data){
    echo
        '<div class="ville">
            <label class="container">' . $data["ville"] . '
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>';
}

function displayLePlus(){
    echo
        '<hr>
        
        <h6 class="titreLeplus"><strong>LE PLUS...</strong></h6>
            <div class="arrow-wrapper">
                <div class="fleche-haut"></div>
            </div>

        <hr>

            <div class="populaire">
                <label class="container">Populaire
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="recent">
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