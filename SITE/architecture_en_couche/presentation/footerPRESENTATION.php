<?php

// FONCTIONS GLOBALES //
function displayFooter(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayBottomFooter();
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
            <meta charset='UTF-8'>
        
            <link rel='stylesheet' href='../../libs/bootstrap/css/bootstrap.css'>
            <link rel='stylesheet' href=''../../libs/css/footer.css'>
        
            <link href='https://fonts.googleapis.com/css2?family=Halant&display=swap' rel='stylesheet'> 
        
            <title>Footer</title>
        </head>";
}

function displayTopTagBody(){
    echo
        "<body>";
}

function displayBottomFooter(){
    echo
        "<footer>
            <div class='footer row fixed-bottom'>

                <div class='CGU col-3'>Conditions générales d'utilisation</div>

                <div class='mentionslegales col-3'>Mentions légales</div>

                <div class='contact col-3'><a href='../controleur/contactCONTROLEUR.php' class='liencontact'>Contact</a></div>

                <div class='copyright col-3'>© 2020 Travelog</div>
            </div>
        </footer>";
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