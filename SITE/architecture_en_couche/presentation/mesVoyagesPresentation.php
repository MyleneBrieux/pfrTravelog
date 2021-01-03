<?php

    function voyagesHead(){
        echo'<!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Mes voyages</title>
            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="../../libs/css/mes_voyages.css">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </head>';
    }

    function voyagesHeader(){
        echo'<body>
        <div class="container-fluid">
            <div class="row">';
                include ("navbarCONTROLEUR.php");
            echo'</div>';
    }

    function menuLat(){
        echo'<div class="row">';
        include ("menulatCONTROLEUR.php");
    }

    function débutCorpsVisiteur($profil){
        echo' <h1 class="titre_mesvoyages">Les voyages de <strong>'. $profil['pseudo'] .'</strong></h1>
        <p class="rsvoyages">XX voyages - XX continents visités - XX pays visités</p>';
    }

    function débutCorpsUtilisateur(){
        echo' <h1 class="titre_mesvoyages">Mes voyages</h1>
        <p class="rsvoyages">XX voyages - XX continents visités - XX pays visités</p>';
    }

    function afficherUser($profil){
        echo'<div class="row">
        <div class="encadrevoyage">
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofilrond" />
            <a href="../controleur/monProfilControleur.php?pseudo='.$profil["pseudo"].'" class="">
                Voir le profil
            </a>
            <a href="detail_voyage.php" class="">
                Le suivre
            </a>
            <a href="detail_voyage.php" class="">
                Le contacter
            </a>
        </div>
    </div>
</div>';
    }

    function creationVoyage(){
        echo'<div class="row">
        <div class="encadrevoyage">
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofilrond" />
            <a href="../controleur/creation_voyageCONTROLEUR.php" class="">
                Créer un nouveau voyage
            </a>
        </div>
    </div>
</div>';
    }

    function voyage1(){
        echo'<div class="row">
        <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil1 ghost" />
        <h1 class="titrevoyage1">Titre</h1>
        <img src="../../../images/photos/trevi.jpg" class="photovoyage1" />
        <div class="encadrevoyage1">
            <p class="textevoyage1">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
            </p>
            <a href="detail_voyage.php" class="lienvoyage1">
                Découvrir ce voyage
            </a>
        </div>
    </div>';
    }
        
    function voyage2(){
    echo'<div class="row">
        <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil2 ghost" />
        <h1 class="titrevoyage2">Titre</h1>
        <img src="../../../images/photos/beijing_temple_du_ciel.jpg" class="photovoyage2" />
        <div class="encadrevoyage2">
            <p class="textevoyage2">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
            </p>
            <a href="" class="lienvoyage2">
                Découvrir ce voyage
            </a>
        </div>
    </div>';
    }

    function voyage3(){
    echo'<div class="row">
        <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil3 ghost" />
        <h1 class="titrevoyage3">Titre</h1>
        <img src="../../../images/photos/st_petersburg_russia.jpg" class="photovoyage3" />
        <div class="encadrevoyage3">
            <p class="textevoyage3">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
            </p>
            <a href="" class="lienvoyage3">
                Découvrir ce voyage
            </a>
        </div>
    </div>';
    }

    function voyage4(){
    echo'<div class="row">
        <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil4 ghost" />
        <h1 class="titrevoyage4">Titre</h1>
        <img src="../../../images/photos/palais_gyeongbok.jpg" class="photovoyage4" />
        <div class="encadrevoyage4">
            <p class="textevoyage4">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
            </p>
            <a href="" class="lienvoyage4">
                Découvrir ce voyage
            </a>
        </div>
    </div>';
    }

    function nbPages(){
        echo'<div class="row">
        <p class="pages">
            < 1 2 ... 4>
        </p>
    </div>';
    }

    function footer(){
        include ("footerCONTROLEUR.php");
    }

    function finPage(){
        echo'</div>
        </body>
        </html>';
    }

    function voyagesDebut(){
        voyagesHead();
        voyagesHeader();
    }

    function afficherVoyages(){
        voyage1();
        voyage2();
        voyage3();
        voyage4();
    }

    function voyagesFin(){
        footer();
        finPage();
    }

?>