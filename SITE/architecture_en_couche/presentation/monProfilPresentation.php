<?php

    function profilHead(){
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../../libs/css/monprofil.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>profil</title>
        </head>';
    }

    function profilHeader(){
        echo '<body>
        <div class="container-fluid">
        <header class="header">';
            include "navbarCONTROLEUR.php";
        echo'</header>';
    }

    function menuLat($profil, $setBirthday, $isNotUser){
        echo'<div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 pl-0 col-12 bg-sable">
                    <nav class="menu">
                        <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                            <div class="image-profil">
                                <img src="../../img/photos/photo_profil_defaut.png" alt="photo de profil" width="100%" height="100%" />
                            </div>
                            <div class="row">';
                            if ($setBirthday) {
                                $dateNaissance = new DateTime($profil['birthday']);
                                $dateAjd = new DateTime();
                                $age = date_diff($dateNaissance, $dateAjd);
                                echo'<p>'. $age->format('%y ans') .'</p>';
                            }
                            echo'</div>
                            <div class="row">
                                <p class="titre-lang">Langue parlée : </p>
                                <p>
                                    <ul>
                                        <li>'. $profil['type_langue'] .'</li>
                                    </ul>
                                </p>
                            </div>';
                            if($isNotUser){
                                echo'<div class="row mt-3">
                                    <p><img src="../../img/logos_divers/ami_turquoise2.png" alt="logo amis">Ajouter en ami</p>
                                </div>';
                            }
                            echo'
                            <div class="row mt-3 mb-3">
                                <a href="../controleur/controleur_profil.php"><button type="button" class="button">Modifier le profil</button></a>
                            </div>
                            <div class="row mt-3 mb-3">
                                <a href="../controleur/mesAmisControleur.php?pseudo='. $profil['pseudo'] .'"><button type="button" class="button">Mes Amis</button></a>
                            </div>
                            <div class="row mt-3 mb-3">
                                <a href="../controleur/controleur_contact.php"><button type="button" class="button">Contactez moi</button></a>
                            </div>
                        </div>
                    </nav>
                </div>';
    }

    function presentationUser($profil, $setNation, $setDescription){
        echo '<div class="col-lg-10 col-md-8 col-sm-8 col-12 mt-2">
                    <div class="d-inline-flex p-2 bd-highlight">';
                    if ($setNation) {
                        echo'<h3><img src="../../img/flags/flags/flat/24/'. $profil['nation'] .'.png" alt="drapeau de nationalité">'. $profil['pseudo'] .'</h3>';
                    }else{
                        echo'<h3>'. $profil['pseudo'] .'</h3>';
                    }
                        
                    echo'</div>
                    <div class="d-flex justify-content-end">
                        <p class="pr-4 bd-highlight">X contienents visités</p>
                        <p class="pr-4 bd-highlight">XX pays visités</p>
                    </div>
                    <div class="pl-2 rectangle_desc">
                        <p class="description">Description : </p>';
                        if ($setDescription) {
                            echo'<p>'. $profil['description'] .'</p>';
                        }else{
                            echo'<p>Cet utilisateur a choisi de rester mystérieux.</p>';
                        }
                    echo'</div>';
    }

    function lastTrip($mostRecentVoyage){
        echo'<div class="row d-flex justify-content-around mt-2">
                        <div>
                            <a href="../controleur/detail_voyageControleur.php"><h3>Son dernier voyage : </h3>
                            <h4>'. $mostRecentVoyage['titre'] .'</h4>
                            <img class="mt-2" src="' . $mostRecentVoyage["couverture"] . '" alt="" width=352 height=224></a>
                        </div>';
                    }

    function noTrip(){
        echo'<div class="row d-flex justify-content-around mt-2">
                <div>
                    <p>Cet utilisateur n\'a pas uploadé de voyage.</p>
                </div>';
            }

    function mostPopular($mostPopularVoyage){
        echo'<div>
                <a href="../controleur/detail_voyageControleur.php"><h3>Le plus populaire : </h3>
                <h4>'. $mostPopularVoyage['titre'] .'</h4>
                <img class="mt-2" src="' . $mostPopularVoyage["couverture"] . '" alt="" width=352 height=224></a>
                </div>
            </div>';
    }
    function redirectionPageVoyages($profil) {
                    echo'<div>
                        <a href="../controleur/mesVoyagesControleur.php?pseudo='.$profil["pseudo"].'"><h3>Ses autres voyages</h3></a>
                    </div>
                    <div class="row d-inline-flex justify-content-around">';
    }
    
    function autresVoyages($data) {
                    echo'
                        <div class="ml-3">
                        <a href="../controleur/detail_voyageControleur.php?=code_voyage='. $data['code_voyage'] .'&code_etape='. $data['code_etape'] .'"><h4>'. $data['titre'] .'</h4>
                            <img class="mt-2" src="' . $data["couverture"] . '" alt="" width=352 height=224></a>
                        </div>';
    }

    function footer(){
        echo'</div>
        </div>
        </div>
        <footer class="footer">';
            include "footerCONTROLEUR.php";
        echo'</footer>';
    }

    function finPage(){
        echo '</div>
            </body>
            </html>';
    }

    function profilDebut(){
        profilHead();
        profilHeader();
    }

    function profilFin(){
        footer();
        finPage();
    }

?>