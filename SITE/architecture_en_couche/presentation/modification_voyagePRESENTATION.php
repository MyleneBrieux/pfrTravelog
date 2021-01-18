<?php

function modification_head(){
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
            <title>Modification de Voyage</title>
        </head>';

}

function modification_bodyTop(){
    echo '<body class="background-body">';
}

function modification_header(){
    echo '<div class="container">
            <div class="header">';
                include('navbarCONTROLEUR.php');
    echo   '</div>';
}

function modification_h1(){
    echo '<h1>Modification de voyage</h1>';
}

//  Titre du voyage

function modification_debutForm(){
    echo '<form action="../controleur/modification_voyageCONTROLEUR.php?action=modification&code_voyage='.$_GET['code_voyage'].'&code_etape='.$_GET['code_etape'].'" method="post">';
}

function modification_champTitre($detailVoyage){
    echo '<div class="row form-titre ml-1 mr-1">
            <input type="text" class="form-control" name="titre" placeholder="Titre" value="'.$detailVoyage["titre"].'" required>
        </div>';
}

// Les filtres

function modification_filtres($detailVoyage){
    echo '<h4>Filtres</h4>
        <div class="row d-flex justify-content-around">
            <div class="col-3">
                <p> Continent:</br> 
                <input type="text" name="continent" placeholder="Ex: Europe" value="'.$detailVoyage["continent"].'" required></p>
            </div>
            <div class="col-3">
                <p> Pays:</br> 
                <input type="text" name="pays" placeholder="Ex: France" value="'.$detailVoyage["pays"].'" required></p>
            </div>
            <div class="col-3">
                <p> Ville:</br> 
                <input type="text" name="ville" placeholder="Ex: Paris" value="'.$detailVoyage["ville"].'" required></p>
            </div>
        </div>';
}

// Dates du séjour

function modification_dates($detailVoyage){
    echo '<div class="row ml-1 mr-1 mt-4 d-flex justify-content-between">
            <p> Date de début de séjour:</br> 
            <input type="date" name="date_debut" value="'.$detailVoyage["date_debut"].'" required></p>

            <p>Date de fin de séjour:</br> 
            <input type="date" name="date_fin" value="'.$detailVoyage["date_fin"].'" required></p>
        </div>';
}


// Formulaire du texte du voyage

function modification_description($detailVoyage){
    echo '<div class="row form-text ml-1 mr-1">
            <textarea class="form-control" id="texte_voyage" rows="10" name="resume" placeholder="Faites un résumé de votre voyage en quelques lignes" required>'.$detailVoyage["resume"].'</textarea>
        </div>';
}

// Les boutons d'ajout


function modification_addButton($detailEtape){
    echo '<h1 class="mt-5">Modification de votre étape</h1>
    
    <div class="row form-titre  ml-1 mr-1">
            <input type="text" class="form-control" name="sous_titre" placeholder="sous-titre" value="'.$detailEtape["sous_titre"].'" required>
        </div>';
        
    echo '<div class="row form-titre ml-1 mr-1">
        <textarea class="form-control" id="texte_voyage" rows="10" name="description" placeholder="Une petite description de votre étape" required>'.$detailEtape["description"].'</textarea>
    </div>';
}


// La checkbox
function modification_checkbox(){
    echo '<div class="row d-flex justify-content-center">
            <label class="rectangle-checkbox checkbox">
                <input type="checkbox" name="statut" value="Prive"> Partager ce voyage uniquement avec mes amis
            </label>
        </div>';
}

// Les boutons pour la publication

function modification_publicationButton(){
    echo '<div class="row btn-group d-flex justify-content-center" role="group">
            <button type="submit" class="border-right">Modifier mon voyage</button>
        </div>';
}

function modification_finForm(){
    echo '</form>';
}

function modification_finDivConteneur(){
    echo '</div>';
}

function modification_bodyBottom(){
    echo '</body>';
}

function modification_footer(){
    echo '<footer class="footer">';
        include('footerCONTROLEUR.php');
    echo '</footer>';
}

function modification_finHtml(){
    echo '</html>';
}



function modification_headBodyTop(){
    modification_head();
    modification_bodyTop();
}

function modification_corpsPage($detailVoyage, $detailEtape){
    modification_header();
    modification_h1();
    modification_debutForm();
    modification_champTitre($detailVoyage);
    modification_filtres($detailVoyage);
    modification_dates($detailVoyage);
    modification_description($detailVoyage);
    modification_addButton($detailEtape);
    modification_checkbox();
    modification_publicationButton();
    modification_finForm();
    modification_finDivConteneur();
}

function modification_basPage(){
    modification_footer();
    modification_bodyBottom();
    modification_finHtml();
}

