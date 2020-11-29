<?php

// FONCTIONS GLOBALES //
function displayPageInscription(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayTopTagContainer();
    displayHeader();
    displayLeftPolaroid();
    displayInscriptionFrame();
    displayRightPolaroid();
    displayBottomTagContainer();
    displayBottomTagBody();
    displayBottomTagHTML();
}


// FONCTIONS EN VRAC //
// affichage de base //
function displayTopTagHtml(){
    echo
        '<!DOCTYPE html>
        <html lang="fr">';
}

function displayHead(){
    echo
        '<head>
            <meta charset="utf-8">
            <title>
                Inscription
            </title>

            <link rel="stylesheet" href="../../libs/css/inscription.css">
            <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css"/>


            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 

        </head>';
}

function displayTopTagBody(){
    echo
        '<body>';
}

function displayTopTagContainer(){
    echo
        '<div class="container-fluid">';
}

function displayHeader(){
    echo
        '<div class="row">

            <img src="../../img/logo_site/Logo_couleurs.png" class="logotravelog"/>

            <h1 class="nomtravelog">TRAVELOG</h1>

        </div>';
}

function displayLeftPolaroid(){
    echo
        '<div class="row">

            <img src="../../img/photos/polaroid2.png" class="polaroid1"/>';
}

function displayInscriptionFrame(){
    echo
        '<div class="encadreinscription">
            <div class="introencadreinscription">
                Inscription
            </div>

            <div class="formulaireinscription">
                <form action="../controleur/inscriptionCONTROLEUR.php?action=inscription" method="post">
                    <div class="form-group">
                        <input type="text" class="pseudoinscription" name="pseudo" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="adressemailinscription" name="mail" placeholder="Adresse email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="motdepasseinscription" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <input type="password" class="confirmationmotdepasseinscription" name="confirmpassword" placeholder="Confirmation du mot de passe">
                    </div>

                    <div class="CGU">
                        <label class="container">J\'accepte les <a href src="" class="liencgu" name="checkcgu" data-toggle="modal" data-target="#CGUPopUp">conditions générales d\'utilisation</a>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <button type="submit" class="boutoninscription"><strong>JE M\'INSCRIS</strong></button>
                </form>
            </div>

            <div class="connexion">
                <strong>Pour se connecter, c\'est par <a href="connexionCONTROLEUR.php" class="lienconnexion">ici</a></strong>
            </div>
        </div>';
}

function displayRightPolaroid(){
    echo    
            '<img src="../../img/photos/polaroid.png" class="polaroid2"/>

        </div>';
}

function displayBottomTagContainer(){
    echo
        '</div>';
}

function displayBottomTagBody(){
    echo
        '</body>';
}

function displayBottomTagHTML(){
    echo
        '</html>';
}

// messages d'erreur //
function displayMailUsed(){
    echo
        '<div class="alert alert-danger col-6 offset-3 mt-2 m3-2" role="alert">
            <p class="text-center p-0 m-0"> Cette adresse email est déjà utilisée ! </p>
        </div>';
}

?>