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
    displayFormInscription();
    displayLienCGU();
    popUpCGU();
    displayInscriptionButton();
    lienConnexion();
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
            <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">

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
                    <div class="carousel-item active" data-interval="750">
                        <img src="../../img/photos/photos_carousels/grece.jpg" alt="left-caroussel slide 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="750">
                        <img src="../../img/photos/photos_carousels/hambourg.jpg" alt="Carrousel slide 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="750">
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
            </div>';
}

function displayFormInscription(){
    echo
        '<div class="formulaireinscription">
            <form action="../controleur/inscriptionCONTROLEUR.php?action=inscription" method="post">
                <div class="form-group">
                    <input type="text" class="pseudoinscription" name="pseudo" placeholder="Pseudo"
                           pattern="[a-zA-Z._-]{2,20}" title="20 caractères maximum (caractères spéciaux autorisés : _ , - et . )" required>
                </div>
                <div class="form-group">
                    <input type="email" class="adressemailinscription" name="mail" placeholder="Adresse email"
                           pattern="[0-9a-z.-_]{2,}@[0-9a-z]{2,}.[a-z]{2,3}$" title="xx@xx.xx" required>
                </div>
                <div class="form-group">
                    <input type="password" class="motdepasseinscription" name="password" placeholder="Mot de passe"
                           pattern="(?=^.{8,}$)(?=.*\d)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="8 caractères minimum dont 1 majuscule, 1 minuscule et 1 chiffre" required>
                </div>
                <div class="form-group">
                    <input type="password" class="confirmationmotdepasseinscription" name="confirmpassword" placeholder="Confirmation du mot de passe" 
                    pattern="(?=^.{8,}$)(?=.*\d)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="8 caractères minimum dont 1 majuscule, 1 minuscule et 1 chiffre" required>
                </div>';
}

function displayLienCGU(){
    echo
        '<div class="CGU">
        <label class="container">J\'accepte les <a href src="" class="liencgu" name="checkcgu" data-toggle="modal" data-target="#CGUPopUp">conditions générales d\'utilisation</a>
            <input name="checkcgu"type="checkbox" required>
            <span class="checkmark"></span>
        </label>
    </div>';
}

function popUpCGU(){
    echo
        '<div class="modal fade" id="CGUPopUp">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="cgu-title"><strong>Conditions Générales d\'Utilisation</strong></h4>
                    </div>
            
                    <div class="modal-body">
                        <h5><strong>Conditions de service</strong></h5>
                            <p class="text-cgu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
                                Integer massa elit, sodales vitae purus quis, tempus aliquet quam. Vivamus pharetra nunc sed est malesuada vulputate. 
                                Fusce imperdiet lacus sit amet erat vehicula, vitae suscipit ex pharetra. Quisque in velit sem. Mauris malesuada tellus et mi tempus cursus. 
                                Morbi ut diam aliquet, bibendum libero porta, finibus augue. Maecenas pharetra vulputate sapien in mattis. Pellentesque gravida pharetra facilisis. 
                                Nullam libero nulla, gravida dapibus mi ut, finibus malesuada neque. Nunc tincidunt sed odio sed pretium. 
                                Nullam ac dolor sit amet sapien porttitor semper in eu risus. Fusce ante erat, aliquet et ullamcorper in, venenatis sed nisl. 
                                Donec venenatis dui mi, nec tempus mi ultrices vehicula. Proin blandit mauris urna, quis tempor lacus lobortis at. 
                                Aenean mattis ipsum augue, a mattis nibh ultrices nec. Sed condimentum, odio eget fermentum viverra, lorem ante elementum justo, at auctor enim lorem in tellus. 
                                Mauris euismod rhoncus quam, vitae blandit est porttitor non. Aliquam molestie diam sed finibus fringilla. Quisque hendrerit sit amet nisi id blandit. 
                                Quisque viverra mattis elit, id porttitor tellus ultricies mollis. In vel aliquam ex, quis mollis magna. Nullam aliquet imperdiet laoreet. 
                                Sed pharetra, ipsum et mollis ultricies, felis arcu semper ipsum, quis vehicula justo metus sed urna. Morbi urna nulla, lobortis sit amet tempus quis, auctor eget elit. 
                                Nullam laoreet eu quam et aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id leo sit amet velit tincidunt vehicula. 
                                Nam sollicitudin dignissim pretium. Suspendisse egestas tristique neque, nec elementum lorem vestibulum ut. Quisque egestas ex et dictum mattis. 
                                Phasellus sed magna sed dolor varius dignissim et ac justo. Integer ligula elit, maximus ut posuere eu, porttitor vel purus.
                            </p>
                        <h5><strong>Politique d\'utilisation des données</strong></h5>
                            <p class="text-cgu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
                                Integer massa elit, sodales vitae purus quis, tempus aliquet quam. Vivamus pharetra nunc sed est malesuada vulputate. 
                                Fusce imperdiet lacus sit amet erat vehicula, vitae suscipit ex pharetra. Quisque in velit sem. Mauris malesuada tellus et mi tempus cursus. 
                                Morbi ut diam aliquet, bibendum libero porta, finibus augue. Maecenas pharetra vulputate sapien in mattis. Pellentesque gravida pharetra facilisis. 
                                Nullam libero nulla, gravida dapibus mi ut, finibus malesuada neque. Nunc tincidunt sed odio sed pretium. 
                                Nullam ac dolor sit amet sapien porttitor semper in eu risus. Fusce ante erat, aliquet et ullamcorper in, venenatis sed nisl. 
                                Donec venenatis dui mi, nec tempus mi ultrices vehicula. Proin blandit mauris urna, quis tempor lacus lobortis at. 
                                Aenean mattis ipsum augue, a mattis nibh ultrices nec. Sed condimentum, odio eget fermentum viverra, lorem ante elementum justo, at auctor enim lorem in tellus. 
                                Mauris euismod rhoncus quam, vitae blandit est porttitor non. Aliquam molestie diam sed finibus fringilla. Quisque hendrerit sit amet nisi id blandit. 
                                Quisque viverra mattis elit, id porttitor tellus ultricies mollis. In vel aliquam ex, quis mollis magna. Nullam aliquet imperdiet laoreet. 
                                Sed pharetra, ipsum et mollis ultricies, felis arcu semper ipsum, quis vehicula justo metus sed urna. Morbi urna nulla, lobortis sit amet tempus quis, auctor eget elit. 
                                Nullam laoreet eu quam et aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id leo sit amet velit tincidunt vehicula. 
                                Nam sollicitudin dignissim pretium. Suspendisse egestas tristique neque, nec elementum lorem vestibulum ut. Quisque egestas ex et dictum mattis. 
                                Phasellus sed magna sed dolor varius dignissim et ac justo. Integer ligula elit, maximus ut posuere eu, porttitor vel purus.
                            </p>
                        <h5><strong>Standards de la communauté</strong></h5>
                            <p class="text-cgu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
                                Integer massa elit, sodales vitae purus quis, tempus aliquet quam. Vivamus pharetra nunc sed est malesuada vulputate. 
                                Fusce imperdiet lacus sit amet erat vehicula, vitae suscipit ex pharetra. Quisque in velit sem. Mauris malesuada tellus et mi tempus cursus. 
                                Morbi ut diam aliquet, bibendum libero porta, finibus augue. Maecenas pharetra vulputate sapien in mattis. Pellentesque gravida pharetra facilisis. 
                                Nullam libero nulla, gravida dapibus mi ut, finibus malesuada neque. Nunc tincidunt sed odio sed pretium. 
                                Nullam ac dolor sit amet sapien porttitor semper in eu risus. Fusce ante erat, aliquet et ullamcorper in, venenatis sed nisl. 
                                Donec venenatis dui mi, nec tempus mi ultrices vehicula. Proin blandit mauris urna, quis tempor lacus lobortis at. 
                                Aenean mattis ipsum augue, a mattis nibh ultrices nec. Sed condimentum, odio eget fermentum viverra, lorem ante elementum justo, at auctor enim lorem in tellus. 
                                Mauris euismod rhoncus quam, vitae blandit est porttitor non. Aliquam molestie diam sed finibus fringilla. Quisque hendrerit sit amet nisi id blandit. 
                                Quisque viverra mattis elit, id porttitor tellus ultricies mollis. In vel aliquam ex, quis mollis magna. Nullam aliquet imperdiet laoreet. 
                                Sed pharetra, ipsum et mollis ultricies, felis arcu semper ipsum, quis vehicula justo metus sed urna. Morbi urna nulla, lobortis sit amet tempus quis, auctor eget elit. 
                                Nullam laoreet eu quam et aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id leo sit amet velit tincidunt vehicula. 
                                Nam sollicitudin dignissim pretium. Suspendisse egestas tristique neque, nec elementum lorem vestibulum ut. Quisque egestas ex et dictum mattis. 
                                Phasellus sed magna sed dolor varius dignissim et ac justo. Integer ligula elit, maximus ut posuere eu, porttitor vel purus. 
                            </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-fermer-cgu" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>';
}

function displayInscriptionButton(){
    echo
            '<button type="submit" class="boutoninscription" id="validerinscription"><strong>JE M\'INSCRIS</strong></button>
        </form>
    </div>';
}   

function lienConnexion(){
    echo                  
            '<div class="connexion">
                <strong>Pour se connecter, c\'est par <a href="connexionCONTROLEUR.php" class="lienconnexion">ici</a></strong>
            </div>
        </div>';
}

function displayRightPolaroid(){
    echo
        '<div class="right-polaroid">
            <div id="right-caroussel" class ="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="750">
                        <img src="../../img/photos/photos_carousels/japon.jpg" alt="left-caroussel slide 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="750">
                        <img src="../../img/photos/photos_carousels/londres.jpg" alt="Carrousel slide 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="750">
                        <img src="../../img/photos/photos_carousels/venise.jpg" alt="Carrousel slide 3" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
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
function displayPseudoUsed(){
    echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center;font-family:Halant,serif;">
            Ce pseudo est déjà attribué à un utilisateur.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>';
}

function displayMailUsed(){
    echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center;font-family:Halant,serif;">
            Cette adresse email est déjà utilisée.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>';
}

function displayDifferentPasswords(){
    echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center;font-family:Halant,serif;">
            Les deux mots de passe saisis ne correspondent pas.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>';
}

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