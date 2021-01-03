<?php

function creation_head(){
    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css" type="text/css">
            <link rel="stylesheet" href="../../libs/css/creation_voyage.css" type="text/css">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
            <title>Création de Voyage</title>
        </head>';

}

function creation_bodyTop(){
    echo '<body class="background-body">';
}

function creation_header(){
    echo '<div class="container">
            <div class="header">';
                include('navbarCONTROLEUR.php');
    echo   '</div>';
}

function creation_h1(){
    echo '<h1>Création de voyage</h1>';
}

//  Titre du voyage

function creation_debutForm(){
    echo '<form action="../controleur/creation_voyageCONTROLEUR.php?action=creation" method="post">';
}

function creation_champTitre(){
    echo '<div class="row form-titre ml-1 mr-1">
            <input type="text" class="form-control" name="titre" placeholder="Titre" required>
        </div>';
}

// Les filtres

function creation_filtres(/*$utilisateur*/){
    echo '<h4>Filtres</h4>
        <div class="row d-flex justify-content-around">
            <div class="col-3">
                <p> Continent:</br> 
                <input type="text" name="continent" placeholder="Ex: Europe" required></p>
            </div>
            <div class="col-3">
                <p> Pays:</br> 
                <input type="text" name="pays" placeholder="Ex: France" required></p>
            </div>
            <div class="col-3">
                <p> Ville:</br> 
                <input type="text" name="ville" placeholder="Ex: Paris" required></p>
            </div>
        </div>';
        // echo $utilisateur["id"];
        // echo $_SESSION["photoprofil"];
        // echo "$id";
}

// Dates du séjour

function creation_dates(){
    echo '<div class="row ml-1 mr-1 mt-4 d-flex justify-content-between">
            <p> Date de début de séjour:</br> 
            <input type="date" name="date_debut" required></p>

            <p>Date de fin de séjour:</br> 
            <input type="date" name="date_fin" required></p>
        </div>';
}


// Formulaire du texte du voyage

function creation_description(){
    echo '<div class="row form-text ml-1 mr-1">
            <textarea class="form-control" id="texte_voyage" rows="10" name="resume" placeholder="Faites un résumé de votre voyage en quelques lignes" required></textarea>
        </div>';
}

// Les boutons d'ajout


function creation_addButton(){
    echo '<h1 class="mt-5">Création de votre première étape</h1>
    
    <div class="row form-titre  ml-1 mr-1">
            <input type="text" class="form-control" name="sous_titre" placeholder="sous-titre" required>
        </div>';
        
    echo '<div class="row form-titre ml-1 mr-1">
        <textarea class="form-control" id="texte_voyage" rows="10" name="description" placeholder="Une petite description de votre étape" required></textarea>
    </div>';
}


// Form pour ajouter ses fichiers

function creation_addFiles(){
    echo '<div class="row form-files d-flex justify-content-center">
            <div class="rectangle-files addfiles">
                <input type="file" class="form-control-file" id="ajoutFichiers" name="couverture" multiple>
            </div>
        </div>';
}


// La checkbox
function creation_checkbox(){
    echo '<div class="row d-flex justify-content-center">
            <label class="rectangle-checkbox checkbox">
                <input type="checkbox"> Partager ce voyage uniquement avec mes amis
            </label>
        </div>';
}

// Les boutons pour la publication

function creation_publicationButton(){
    echo '<div class="row btn-group d-flex justify-content-center" role="group">
            <button type="submit" class="border-right">Ajouter mon voyage</button>
        </div>';
}

function creation_finForm(){
    echo '</form>';
}

function creation_finDivConteneur(){
    echo '</div>';
}

function creation_bodyBottom(){
    echo '</body>';
}

function creation_footer(){
    echo '<footer class="footer">';
        include('footerCONTROLEUR.php');
    echo '</footer>';
}

function creation_finHtml(){
    echo '</html>';
}



function creation_headBodyTop(){
    creation_head();
    creation_bodyTop();
}

function creation_corpsPage(/*$utilisateur*/){
    creation_header();
    creation_h1();
    creation_debutForm();
    creation_champTitre();
    creation_filtres(/*$utilisateur*/);
    creation_dates();
    creation_description();
    creation_addButton();
    creation_addFiles();
    creation_checkbox();
    creation_publicationButton();
    creation_finForm();
    creation_finDivConteneur();
}

function creation_basPage(){
    creation_footer();
    creation_bodyBottom();
    creation_finHtml();
}

