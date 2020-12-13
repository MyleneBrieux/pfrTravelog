<?php

function creation_head(){
    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css" type="text/css">
            <link rel="stylesheet" href="../../libs/css/creation_voyage.css" type="text/css">
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

function creation_champTitre(){
    echo '<div class="row form-titre ml-1 mr-1">
            <input class="form-control" type="text" placeholder="Titre">
        </div>';
}

// Les filtres

function creation_filtres(){
    echo '<h4>Filtres</h4>
        <div class="row d-flex justify-content-around">
        <button type="button" class="button">+ Ajouter un continent</button>
        <button type="button" class="button">+ Ajouter un pays</button>
        <button type="button" class="button">+ Ajouter une ville</button>
        </div>';
}

// Dates du séjour

function creation_dates(){
    echo '<div class="row ml-1 mr-1 mt-4 d-flex justify-content-between">
            <p> Date de début de séjour:</br> <input type="date" name="date_debut_sejour"></p>
            <p>Date de fin de séjour:</br> <input type="date" name="date_fin_sejour"></p>
        </div>';
}


// Formulaire du texte du voyage

function creation_description(){
    echo '<div class="row form-text ml-1 mr-1">
            <textarea class="form-control" id="texte_voyage" rows="20" placeholder="Texte"></textarea>
        </div>';
}

// Les boutons d'ajout


function creation_addButton(){
    echo '<div class="row d-flex justify-content-center">
            <button type="button" class="button" data-toggle="modal" data-target="#ModalSousTitre">+ Ajouter un sous-titre</button>
        </div>

        <div class="modal fade" id="ModalSousTitre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ecrire un sous-titre
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
    
                        <form action="creation_voyage.php?soustitre=' . $soustitre . '" method="post">
        
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Ecrivez votre sous-titre ici ..."></textarea>
        
                        </form>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <button type="button" class="button" data-toggle="modal" data-target="#ModalDescription">+ Ajouter un texte</button>
        </div>

        <div class="modal fade" id="ModalDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ecrire une description
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
    
                        <form action="creation_voyage.php?description=' . $description . '" method="post">
        
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Ecrivez votre description ici ..."></textarea>
        
                        </form>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>';
}


// Form pour ajouter ses fichiers

function creation_addFiles(){
    echo '<div class="row form-files d-flex justify-content-center">
            <form class="rectangle-files addfiles">
                <input type="file" class="form-control-file" id="ajoutFichiers" name="files" multiple>
            </form>
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
            <button type="button" class="border-right">Ajouter maintenant</button>
            <button type="button" class="border-left">Ajouter plus tard</button>
        </div>';
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

function creation_corpsPage(){
    creation_header();
    creation_h1();
    creation_champTitre();
    creation_filtres();
    creation_dates();
    creation_description();
    creation_addButton();
    creation_addFiles();
    creation_checkbox();
    creation_publicationButton();
    creation_finDivConteneur();
}

function creation_basPage(){
    creation_footer();
    creation_bodyBottom();
    creation_finHtml();
}

