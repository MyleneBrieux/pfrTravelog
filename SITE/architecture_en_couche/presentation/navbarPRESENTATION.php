<?php

// FONCTIONS GLOBALES //
function displayNavbarConnectedOnly(){
    displayTagTopHtml();
    displayHeader();
    displayTagTopBody();
    navbarBrand();
    navbarSearch();
    notifications();
    amis();
    menuUtilisateur();
    photoUtilisateur();
    displayTagBottomBody();
}

function displayNavbarNotConnected(){
    displayTagTopHtml();
    displayHeader();
    displayTagTopBody();
    navbarNotConnected();
    displayTagBottomBody();
    displayTagBottomHtml();
}


// FONCTIONS EN VRAC //
function displayTagTopHtml(){
    echo
        '<!DOCTYPE html>
            <html lang="fr">';
}

function displayHeader(){
    echo
        '<head>
            <meta charset="UTF-8">
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/navbar.css">
        
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
            <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
        
            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
        
            <title>Navbar</title>
        </head>';
}

function displayTagTopBody(){
    echo
        '<body>';
}

function navbarBrand(){
    echo
        '<div>
            <header class="row">

                <nav class="navbar navbar-expand-md navbar-dark bg-perso nav bg-turquoise fixed-top">

                    <img src="../../img/logo_site/logo_blanc.png" class="logoTravelog">

                    <div class="col-3">
                        <a class="navbar-brand d-flex" href="../controleur/accueilCONTROLEUR.php">
                            <div class="nomTravelog">TRAVELOG</div>
                        </a>
                    </div>';
}

function navbarSearch(){
    echo
        '<div class="barreRecherche input-group md-form form-sm form-1 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text lighten-3" id="basic-text1">
                    <i class="fas fa-search text-white" aria-hidden="true"></i>
                </span>
            </div>
            <input class="form-control my-0 py-1" type="search" placeholder="Rechercher..." aria-label="Search">
        </div>';
}

function notifications(){
    echo
        '<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <div class="logoNotif far fa-bell cloche fa-2x" id="dropdownMenuNotifs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuNotifs">
                        <a class="dropdown-item" href="#">Exemple notifs</a>
                    </div>
                </li>';
}

function amis(){
    echo
        '<li class="nav-item">
            <div class="logoAmi far fa-user ami fa-2x" id="dropdownMenuAmis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuAmis">
                <a class="dropdown-item" href="#">Exemple amis</a>
            </div>
        </li>';
}

function menuUtilisateur(){
    echo
        '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-white utilisateur" href="#" id="dropdownMenuUtilisateur" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                '. $_SESSION["pseudo"] .'
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuUtilisateur">
                <a class="mesvoyages dropdown-item" href="../controleur/mesVoyagesControleur.php?pseudo='.$_SESSION["pseudo"].'">Mes voyages</a>
                <a class="monprofil dropdown-item" href="../controleur/monProfilControleur.php?pseudo='.$_SESSION["pseudo"].'">Mon profil</a>
                <a class="deconnexion dropdown-item" href="../controleur/deconnexionCONTROLEUR.php">Déconnexion</a>
            </div>
        </li>';
}

function photoUtilisateur(){
    echo
                            '<img class="photoProfil rounded-circle" src="../../img/photos/photo_profil_detail_voyage.jpg">
                                    
                        </ul>
                    </div>
                </nav>

            </header>
        </div>';
}

function navbarNotConnected(){
    echo
        '<div>
            <header class="row">

                <nav class="navbar navbar-expand-md navbar-dark bg-perso nav bg-turquoise fixed-top">

                    <img src="../../img/logo_site/logo_blanc.png" class="logoTravelog">

                    <div class="col-3">
                        <a class="navbar-brand d-flex" href="../controleur/accueilCONTROLEUR.php">
                            <div class="nomTravelog">TRAVELOG</div>
                        </a>
                    </div>

                    <div class="barreRecherche input-group md-form form-sm form-1 pl-0 col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text lighten-3" id="basic-text1">
                                <i class="fas fa-search text-white" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input class="form-control my-0 py-1" type="search" placeholder="Rechercher..." aria-label="Search">
                    </div>

                    <div>
                        <h6 class="seConnecter"><a href="../controleur/connexionCONTROLEUR.php" class="lienConnexion">Se connecter</a></h6>
                    </div>
                    <div>
                        <h6 class="sinscrire"><a href="../controleur/inscriptionCONTROLEUR.php" class="lienInscription">S\'inscrire</a></6>
                    </div>

                </nav>
            </header>
        </div>';
}

function displayTagBottomBody(){
    echo
        '</body>';
}

function displayTagBottomHTML(){
    echo
        '</html>';
}

?>