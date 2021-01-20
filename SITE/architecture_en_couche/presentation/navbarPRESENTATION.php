<?php

// FONCTIONS GLOBALES //
// utilisateur connecté //
function displayNavbarConnectedOnly1(){
    displayTagTopHtml();
    displayHeader();
    displayTagTopBody();
    navbarBrand();
}

function displayNavbarConnectedOnly2(){
    menuUtilisateur();
}

function displayNavbarConnectedOnly3(){
    displayEndNavbar();
}

// visiteur //
function displayNavbarNotConnected(){
    displayTagTopHtml();
    displayHeader();
    displayTagTopBody();
    navbarNotConnected();
    displayEndNavbar();
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
                        <div class="nomTravelog"><a href="../controleur/accueilCONTROLEUR.php" id="lienAccueil">TRAVELOG</a></div>  
                    </div>';
}

function notifications(){
    echo
        '<div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <div class="logoNotif far fa-bell cloche fa-2x" id="menuNotifs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                </li>';
}

function notificationsBadge1(){
    echo
        '<div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <div class="logoNotif far fa-bell cloche fa-2x" id="menuNotifs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge" id="badgeNotifs"><p id="compteurNotifs">';
}

function notificationsBadge2(){
    echo
                        '</p></span>
                    </div>
                    <div class="dropdown-menu" id="dropdownMenuNotifs" aria-labelledby="dropdownMenuNotifs">';
}

function afficherNotifications1($user){
    echo
        '<a class="affichernotif dropdown-item" href="#">' . $user["pseudo"] . ' vous a laissé un commentaire';
}

function afficherNotifications2($trip){
    echo
        ' sur </br>
        <a href="../controleur/detail_voyageCONTROLEUR.php?code_voyage=' . $trip["code_voyage"] . '&code_etape=' . $trip["code_etape"] . '" id="lienVoyageNotif"> 
        <em>' . $trip["titre"] . '</em></a></a>';
}

function notificationsBadge3(){
    echo
                    '</div>
                </li>';
}

function amis(){
    echo
        '<li class="nav-item">
            <div class="logoAmi far fa-user ami fa-2x" id="menuAmis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </div>
        </li>';
}

function amisBadge1(){
    echo
        '<li class="nav-item">
            <div class="logoAmi far fa-user ami fa-2x" id="menuAmis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge" id="badgeAmi"><p id="compteurDemandesAmi">';
}

function amisBadge2(){
    echo
        '</p></span>
            </div>
            <div class="dropdown-menu" id="dropdownMenuAmis" aria-labelledby="dropdownMenuAmis">';
}

function afficherAmis($donnee){
    echo
        '<a class="afficheramis dropdown-item" href="../controleur/mesAmisControleur.php?pseudo=' . $_SESSION["pseudo"] . '">' . $donnee["pseudo"] . ' vous a demandé en ami.</a>';
}

function amisBadge3(){
    echo
                    '</div>
                </li>';
}

function menuUtilisateur(){
    echo
        '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-white utilisateur" href="#" id="menuUtilisateur" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                '. $_SESSION["pseudo"] .'
            </a>
            <div class="dropdown-menu" id="dropdownMenuUtilisateur" aria-labelledby="dropdownMenuUtilisateur">
                <a class="creationvoyage dropdown-item" href="../controleur/creation_voyageCONTROLEUR.php">Créer un voyage</a>
                <a class="mesvoyages dropdown-item" href="../controleur/mesVoyagesControleur.php?pseudo='.$_SESSION["pseudo"].'">Mes voyages</a>
                <a class="mesamis dropdown-item" href="../controleur/mesAmisControleur.php?pseudo='.$_SESSION["pseudo"].'">Mes amis</a>
                <a class="monprofil dropdown-item" href="../controleur/monProfilControleur.php?pseudo='.$_SESSION["pseudo"].'">Mon profil</a>
                <a class="editerprofil dropdown-item" href="../controleur/controleur_profil.php?pseudo='.$_SESSION["pseudo"].'">Éditer mon profil</a>
                <a class="deconnexion dropdown-item" href="../controleur/deconnexionCONTROLEUR.php">Déconnexion</a>
            </div>
        </li>';
}

function photoUtilisateurDefaut(){
    echo
                            '<img class="photoProfil rounded-circle" src="../../img/photos/photo_profil_defaut.png">
                                    
                        </ul>
                    </div>
                </nav>

            </header>
        </div>';
}

function photoUtilisateurBdd($data){
    echo
                            '<img class="photoProfil rounded-circle" src="'.$data["photoprofil"].'">
                                    
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

function displayEndNavbar(){
    echo
            '</body>
        </html>';
}


// messages d'erreur //
function erreur ($errorCode=null, $message){
    if($errorCode && $errorCode == 1049){ // erreur de synthaxe sur la bdd //
        echo 
            "<div class='alert alert-danger text-center'> Ce site est en maintenance. Merci de revenir ultérieurement. </div>";
    } elseif ($errorCode && $errorCode == 1146){ // problème de synthaxe avec une table de la bdd //
        echo 
            "<div class='alert alert-danger text-center'> Erreur de connexion avec la base de données. Merci de réessayer ultérieurement. </div>";
    } elseif ($errorCode && $errorCode == 1045){ // erreur de connexion à la base de données //
        echo 
            "<div class='alert alert-danger text-center'> Erreur avec la base de données. Merci de réessayer ultérieurement. </div>";
    } elseif ($errorCode && $errorCode == 1064){ // erreur de syntaxe de la requête sql //
        echo 
            "<div class='alert alert-danger text-center'> Erreur avec la base de données. Merci de réessayer ultérieurement. </div>";
    } 
}

?>