<?php

// FONCTIONS GLOBALES //
function displayNavbarConnectedOnly(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayTopNavbar();
    displayBottomTagBody();
}

function displayNavbarNotConnected(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    navbarNotConnected();
    displayBottomTagBody();
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
            <meta charset="UTF-8">
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/navbar.css">
        
            <script src="../jquery/jquery-3.5.1.js" defer></script>
            <script src="../bootstrap/js/bootstrap.js" defer></script>
        
            <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
        
            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
        
            <title>Navbar</title>
        </head>';
}

function displayTopTagBody(){
    echo
        '<body>';
}

function navbarNotConnected(){
    echo
        '<div>
            <header class="row">

                <nav class="navbar navbar-expand-md navbar-dark bg-perso nav bg-turquoise fixed-top">

                <img src="../../img/logo_site/logo_blanc.png" class="logoTravelog">

                    <div class="col-3">
                        <div class="row">
                            <a class="navbar-brand d-flex align-items-center" href="../controleur/accueilCONTROLEUR.php">
                                <div class="nomTravelog">TRAVELOG</div>
                            </a>
                        </div>
                    </div>

                    <div class="barreRecherche input-group md-form form-sm form-1 pl-0 col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text lighten-3" id="basic-text1">
                                <i class="fas fa-search text-white" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input class="form-control my-0 py-1" type="text" placeholder="Rechercher..." aria-label="Search">
                    </div>

                    <div>
                        <h6>Se connecter</h6>
                    </div>
                    <div>
                        <h6>S\'inscrire</6>
                    </div>

                </nav>
            </header>
        </div>';
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