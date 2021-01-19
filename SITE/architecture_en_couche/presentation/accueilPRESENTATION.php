<?php

// FONCTIONS GLOBALES //
function displayPageAccueil1(){
    displayTopTagHtml();
    displayHead();
    navbar();
    displayTopResults();
}

function displayPageAccueil2(){
    footer();
    displayEnd();
}


// FONCTIONS EN VRAC //
function displayTopTagHtml(){
    echo
        '<!DOCTYPE html>
        <html lang="fr">';
}

function displayHead(){
    echo
        '<head>
            <meta charset="utf-8">

            <link rel="stylesheet" href="../../libs/css/accueil.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
        
            <title>
                Accueil
            </title>
        </head>';
}

function navbar(){
    echo 
        '<body>
            <div class="container-fluid">
                <div class="row">';
                    include ("../controleur/navbarCONTROLEUR.php");
            echo 
                '</div>';
}

function displayTopResults(){
    echo 
        '<div class="col-12">
            <p class="rsvoyages">';
}

function displayBottomResults(){
    echo
            '</p>
        </div>';
}

function inputContinent(){
    echo 
        '<div class="col-12">
            <input type="text" name="continent" id="input-continent" placeholder="Filtrer les continents">';
}

function inputPays(){
    echo 
        '<input type="text" name="pays" id="input-pays" placeholder="Filtrer les pays">';
}

function displayColTable(){
    echo
        '<div class="row">
            <table class="table table-sm" id="filtre">
                <thead class="thead" id="enteteTableVoyage">
                    <tr>
                        <th scope="col">DÉCOUVREZ</th>
                        <th scope="col">CONTINENT</th>
                        <th scope="col">PAYS</th>
                        <th scope="col">PAR</th>
                        <th scope="col">EN IMAGE</th>
                        <th scope="col">EN BREF</th>
                    </tr>
                </thead>';
}

function displayDatasTable1($data){
    echo
            '<tbody id="corpsTableVoyage">
                <tr id="ligneVoyage">
                    <td id="titreVoyage">' . $data["titre"] . '</td>
                    <td id="filtreContinent">' . $data["continent"] . '</td>
                    <td id="filtrePays">' . $data["pays"] . '</td>';
}

function displayPseudoTable($donnee){
    echo
            '<td>' . '<a href="../controleur/monProfilControleur.php?pseudo=' . $donnee["pseudo"] . '" class="lienProfil">' . $donnee["pseudo"] . '</a></td>';
}

function displayDatasTable2($data){
    echo
            '<td><img src="../../img/photos/' . $data["couverture"] . '" class="photosVoyage"/></td>
            <td id="resumeTable">' . $data["resume"] . '
                </br>
                <a href="../controleur/detail_voyageCONTROLEUR.php?code_voyage=' . $data["code_voyage"] . '&code_etape=' . $data["code_etape"] . '" 
                id="lienVoyage"><button class="btn" id="btnDetailsVoyage">Découvrir</button>
                </a>
            </td>';
}

function displayBottomTable(){
    echo
                        '</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>';
}

function displayPagination($page, $nbPages){
    echo
        '<div class="pagination" id="pagination">
            <nav aria-label="Page navigation" class="pages">
                <ul class="pagination pagination-sm" id="pagination">';
            for ($page=1; $page<=$nbPages;$page++){
                echo
                    '<li class="page-item" id="encadreNoPage">
                        <a class="page-link" id="noPage" href="accueilCONTROLEUR.php?page='. $page .'">'. $page .'</a>
                    </li>';
            }
    echo 
                '</ul>
            </nav>
        </div>';
}

function footer(){
    include ("../controleur/footerCONTROLEUR.php");
}

function displayEnd(){
    echo 
                    '</div>
                </body>
            <script src="../../libs/jquery/jquery-3.5.1.min.js"></script>
            <script src="../../libs/script_js/scriptFiltreVoyages.js"></script>
        </html>';
}


// messages d'erreur //
function erreurs ($errorCode=null, $message){
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