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
            <link rel='stylesheet' href=''../bootstrap/css/bootstrap.css'/>
            <link rel='stylesheet' href='../css/inscription.css'>
            <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'
                integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj'
                crossorigin='anonymous'></script>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx'
                crossorigin='anonymous'></script>
            

            <title>
                Inscription
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
                        "<div class='encadreinscription'>
                            <div class='introencadreinscription'>
                                Inscription
                            </div>
                        
                            <div class='formulaireinscription'>
                                <div class='form-group'>
                                    <input type='text' class='pseudoinscription form-control' placeholder='Pseudo'>
                                </div>
                                <div class='form-group'>
                                    <input type='text' class='adressemailinscription form-control' placeholder='Adresse email'>
                                </div>
                                <div class='form-group'>
                                    <input type='password' class='motdepasseinscription form-control' placeholder='Mot de passe'>
                                </div>
                                <div class='form-group'>
                                    <input type='password' class='confirmationmotdepasseinscription form-control' placeholder='Confirmation du mot de passe'>
                                </div>
                        
                            <div class='CGU'>
                                <label class='container'>J'accepte les <a href src='' class='liencgu' data-toggle='modal' data-target='#CGUPopUp'>conditions générales d'utilisation</a>
                                    <input type='checkbox'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                        </div>

            <button type='submit' class='boutoninscription btn'><strong>JE M'INSCRIS</strong></button>

            <div class='connexion'>
                <strong>Pour se connecter, c'est par <a href='connexion.php' class='lienconnexion'>ici</a></strong>
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

?>