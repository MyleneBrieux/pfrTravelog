<?php

// FONCTIONS GLOBALES //
function displayMenuLat(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayLeftMenuLat();
    displayBottomTagBody();
}


// FONCTIONS EN VRAC //

function displayTopTagHtml(){
    echo
        "<!DOCTYPE html>
        <html lang='fr'>";
}

function displayHead(){
    echo
        "<head>
            <meta charset='utf-8'>
        
            <link href='https://fonts.googleapis.com/css2?family=Halant&display=swap' rel='stylesheet'>
            <link rel='stylesheet' href='../../libs/bootstrap/css/bootstrap.css'>
            <link rel='stylesheet' href=''../../libs/css/menulat.css'>
        
            <title>
                Menu latéral
            </title>
        </head>";
}

function displayTopTagBody(){
    echo
        "<body>";
}

function displayLeftMenuLat(){
    echo
        "<div class='menulat fixed-left'>
            
            <h6 class='continent'><strong>CONTINENT</strong></h6>
                <div class='arrow-wrapper'>
                    <div class='fleche-haut'></div>
                </div>

            <hr>

                <div class='Afrique'>
                    <label class='container'>Afrique
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

                <div class='AmeriqueNord'>
                    <label class='container'>Amérique du Nord
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

                <div class='AmeriqueSud'>
                    <label class='container'>Amérique du Sud
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

                <div class='Asie'>
                    <label class='container'>Asie
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

                <div class='Europe'>
                    <label class='container'>Europe
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

                <div class='Oceanie'>
                    <label class='container'>Océanie
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

            <hr>

            <h6 class='pays'><strong>PAYS</strong></h6>
                <div class='arrow-wrapper'>
                    <div class='fleche-bas'></div>
                </div>

            <hr>

            <h6 class='ville'><strong>VILLE</strong></h6>
                <div class='arrow-wrapper'>
                    <div class='fleche-bas'></div>
                </div>
                
            <hr>

            <h6 class='leplus'><strong>LE PLUS...</strong></h6>
                <div class='arrow-wrapper'>
                    <div class='fleche-haut'></div>
                </div>

            <hr>

                <div class='Populaire'>
                    <label class='container'>Populaire
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

                <div class='Recent'>
                    <label class='container'>Récent
                        <input type='checkbox'>
                        <span class='checkmark'></span>
                    </label>
                </div>

        </div>";
}

function displayBottomTagBody(){
    echo
        "</body>";
}

function displayBottomTagHTML(){
    echo
        "</html>";
}

?>