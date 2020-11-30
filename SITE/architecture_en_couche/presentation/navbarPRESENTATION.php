<?php

// FONCTIONS GLOBALES //
function displayNavbar(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayTopNavbar();
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
            <link rel='stylesheet' href='../../libs/css/navbar.css'>
        
            <script src='../jquery/jquery-3.5.1.js' defer></script>
            <!-- <script src='../popper/popper.js' defer></script> -->
            <script src='../bootstrap/js/bootstrap.js' defer></script>
            <!-- <script src='../js/index.js' defer></script> -->
        
            <script src='https://kit.fontawesome.com/20f2b0d45a.js' crossorigin='anonymous'></script>
        
            <link href='https://fonts.googleapis.com/css2?family=Halant&display=swap' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css2?family=Rancho&display=swap' rel='stylesheet'>
        
            <title>Navbar</title>
        </head>";
}

function displayTopTagBody(){
    echo
        "<body>";
}

function displayTopNavbar(){
    echo
        "<div>
            <header class='row'>

                <nav class='navbar navbar-expand-md navbar-dark bg-perso nav bg-turquoise fixed-top'>

                <img src='../../img/logo_site/logo_blanc.png' class='logoTravelog'>

                    <div class='col-3'>
                        <div class='row'>
                            <a class='navbar-brand d-flex align-items-center' href='../controleur/accueilCONTROLEUR.php'>
                                <div class='nomTravelog'>TRAVELOG</div>
                            </a>
                        </div>
                    </div>

                    <div class='barreRecherche input-group md-form form-sm form-1 pl-0 col-4'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text lighten-3' id='basic-text1'>
                                <i class='fas fa-search text-white' aria-hidden='true'></i>
                            </span>
                        </div>
                        <input class='form-control my-0 py-1' type='text' placeholder='Rechercher...' aria-label='Search'>
                    </div>

                    <i class='logoNotif far fa-bell cloche fa-2x'></i>

                    <li class='nav-item dropdown'>
                        <a class='nav-link font-white utilisateur' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <i class='fas fa-user logoAmi'></i>
                        </a>

                        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <a class='dropdown-item' href='../controleur/mesvoyagesCONTROLEUR.php' target='blank'>Mes voyages</a>
                            <a class='dropdown-item' href='../controleur/monprofilCONTROLEUR.php' target='blank'>Mon profil</a>

                                <?php 
                                    if(!isset($_SESSION['user'])){ ?>
                                        <a class='dropdown-item' href='index.php?page=figurines'>Deconnexion</a>
                                <?php } ?>
                        </div>
                    </li>

                    <button class='menuHamb navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' 
                        aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>

                    <div class='menuUtilisateur collapse navbar-collapse justify-content-end col-3' id='navbarSupportedContent'>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle font-white utilisateur' href='#' id='navbarDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Utilisateur</a>

                                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                        <a class='dropdown-item' href='../controleur/mesvoyagesCONTROLEUR.php' target='blank'>Mes voyages</a>
                                        <a class='dropdown-item' href='../controleur/profilCONTROLEUR.php' target='blank'>Mon profil</a>

                                            <?php 
                                                if(!isset($_SESSION['user'])){ ?>
                                                    <a class='dropdown-item' href='index.php?page=figurines'>Deconnexion</a>
                                                <?php } ?>
                                    </div>
                        </li>

                        <img class='photoProfil rounded-circle' src='../../img/photos/photo_profil_detail_voyage.jpg'>

                    </div>

                </nav>
            </header>
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