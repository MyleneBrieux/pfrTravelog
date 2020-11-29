<?php

// FONCTIONS GLOBALES //



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
            <link href='https://fonts.googleapis.com/css2?family=Rancho&display=swap' rel='stylesheet'> 
            <link rel='stylesheet' href='../bootstrap/css/bootstrap.css'/>
            <link rel='stylesheet' href=''../css/connexion.css'>
    
            <title>
                Connexion
            </title>
        </head>";
}

function displayTopTagBody(){
    echo
        "<body>";
}

function displayTopTagContainer(){
    echo
        "<div class='container-fluid'>";
}

function displayHeader(){
    echo
        "<div class='row'>

                <img src='../../img/logo_site/Logo_couleurs.png' class='logotravelog'/>

                <h1 class='nomtravelog'>TRAVELOG</h1>

        </div>";
}

function displayLeftPolaroid(){
    echo
        "<div class='row'>

            <img src='../../img/photos/polaroid2.png' class='polaroid1'/>";
}

function displayConnexionFrame(){
    echo
        "<div class='encadreconnexion'>
            <div class='introencadreconnexion'>
                Prêt(e) à partager</br>
                la suite de vos aventures ?
            </div>

            <form class='formulaireconnexion' action='../Class/controleur/ConnexionCONTROLEUR.php?action=connexion' method='post'>
                <div class='form-group'>
                    <input type='text' class='pseudoconnexion form-control' placeholder='Pseudo'>
                </div>
                <div class='form-group'>
                    <input type='password' class='motdepasseconnexion form-control' placeholder='Mot de passe'>
                </div>
            </form>

            <button type='submit' class='boutonconnexion btn'><strong>CONNEXION</strong></button>

            <div class='inscription'>
                <strong>Pour s'inscrire, c'est par <a href='inscription.php'>ici</a></strong>
            </div>
        </div>";
}

function displayRightPolaroid(){
    echo    
        "<img src='../../img/photos/polaroid.png' class='polaroid2'/>

        </div>";
}

function displayBottomTagContainer(){
    echo
        "</div>";
}

function displayBottomTagBody(){
    echo
        "</body>";
}

function displayBottomTagHTML(){
    echo
        "</html>";
}