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

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        <div class="left-polaroid">
            <div id="left-caroussel" class ="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="1000">
                        <img src="../../img/photos/photos_carousels/grece.jpg" alt="left-caroussel slide 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="1000">
                        <img src="../../img/photos/photos_carousels/hambourg.jpg" alt="Carrousel slide 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="1000">
                        <img src="../../img/photos/photos_carousels/lac.jpg" alt="Carrousel slide 3" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>';
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
                            <input name="checkcgu"type="checkbox">
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
        '<div class="right-polaroid">
            <div id="right-caroussel" class ="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="1000">
                        <img src="../../img/photos/photos_carousels/japon.jpg" alt="left-caroussel slide 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="1000">
                        <img src="../../img/photos/photos_carousels/londres.jpg" alt="Carrousel slide 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="1000">
                        <img src="../../img/photos/photos_carousels/venise.jpg" alt="Carrousel slide 3" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>';
}

// function displayRightPolaroid(){
//     echo    
//             '<img src="../../img/photos/polaroid.png" class="polaroid2"/>

//         </div>';
// }

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
function displayPseudoUsed(){
    echo
        '<script>
            window.alert("Ce pseudo est déjà pris !");
        </script>';
}

function displayMailUsed(){
    echo
        '<script>
            window.alert("Cette adresse e-mail est déjà prise !");
        </script>';
}

function displayEmptyPseudo(){
    echo
        '<script>
            window.alert("La saisie d\'un pseudo est nécessaire pour s\'inscrire ! ");
        </script>';
}

function displayEmptyMail(){
    echo
        '<script>
            window.alert("La saisie d\'une adresse email est nécessaire pour s\'inscrire ! ");
        </script>';
}

function displayEmptyPassword(){
    echo
        '<script>
            window.alert("La saisie d\'un mot de passe est nécessaire pour s\'inscrire ! ");
        </script>';
}

function displayEmptyConfirmPassword(){
    echo
        '<script>
            window.alert("Vous devez confirmer votre mot de passe pour vous inscrire ! ");
        </script>';
}

function displayDifferentPasswords(){
    echo
        '<script>
            window.alert("Les deux mots de passe renseignés sont différents !");
        </script>';
}

function displayEmptyCgu(){
    echo
        '<script>
            window.alert("Les conditions générales d\'utilisation doivent être acceptées pour pouvoir s\'inscrire ! ");
        </script>';
}

function displayEmptyForm(){
    echo
        '<script>
            window.alert("La saisie de tous les champs est obligatoire ! ");
        </script>';
}

?>